<?php
/**
 * Created by PhpStorm.
 * User: MinhVu
 * Date: 10/4/2019
 * Time: 4:48 PM
 */

namespace App\Http\Controllers\Admin;


use App\Core\Utility\CommonUtility;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Validator;
class AdminController extends Controller
{
    public function index(Request $request){
        $users = Users::query()->where(["role"=>1])->select();
        $data = $users->orderBy('id','DESC')->paginate(5);
        return view('admin.users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function show($id){
        $user = Users::find($id);
        return view('admin.users.show',compact('user'));
    }

    public function destroy($id)
    {
        Users::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success','User deleted successfully');
    }

    public function update(Request $request, $id)
    {
        Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password'
        ]);


        $input = $request->all();

        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));
        }

        Users::find($id)->update($input);

        return redirect()->route('users.index')
            ->with('success','User updated successfully');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'same:confirm-password'
        ]);


        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['role'] =1;
        $input['is_block'] =0;
        $input['avater'] = null;
        $user = Users::create($input);

        return redirect()->route('users.index')
            ->with('success','User created successfully');
    }

    public function UserAll(Request $request ){
        $data = Users::query()
            ->where(["role"=>1])
            ->select("id","email","name","avatar","is_block")
            ->get();
        return CommonUtility::getSuccessResponse($data, "List User ");
    }

    public function UserDetail(Request $request ){
        $userId = $request->input("id");
        $dataUser = Users::query()
            ->where(["id"=>$userId])
            ->select("id","name", "email", "avatar")
            ->get()->first();
        return CommonUtility::getSuccessResponse($dataUser, "User ");
    }

    public function editUserId($id) {
        return view("admin.users.show", ["modelId" => $id]);
    }

    public function UserUpdate(Request $request ){

        $userId = $request->input("id");
        $name = $request->input("name");
        $email = $request->input("email");
        $password = $request->input("password");
        $confirmpassword = $request->input("confirm_password");

        $dataUser = Users::query()
            ->where(["id"=>$userId])
            ->select()
            ->first();
        if(empty($dataUser)){
            return CommonUtility::getErrorResponse("Account does not exist");
        }
        if($password==$confirmpassword){
            $passwordNew = Hash::make($password);

            $dataUser->name= $name;
            $dataUser->email= $email;
            $dataUser->password= $passwordNew;
            $dataUser->save();

            $data = Users::query()
                ->where(["id"=>$userId])
                ->select("id", "name","email","is_block")
                ->first();
            return CommonUtility::getSuccessResponse($data, "update User ");
        }else{
            return CommonUtility::getErrorResponse("The password you entered is incorrect.");
        }

    }

    public function UserCreate(Request $request ){

        $name = $request->input("name");
        $email = $request->input("email");
        $password = $request->input("password");
        $confirmpassword = $request->input("confirm_password");


        if($password==$confirmpassword){
            $passwordNew = Hash::make($password);
            $user = new Users();
            $user->name = $name;
            $user->email = $email;
            $user->password = $passwordNew;
            $user->role = 1;
            $user->is_block = 0;
            $user->save();
            return CommonUtility::getSuccessResponse($user, "update User ");
        }else{
            return CommonUtility::getErrorResponse("The confirm password you entered is incorrect.");
        }
    }

    public function UserDelete(Request $request ){
        $id = $request->input("id");

        $data = Users::query()
            ->where(["id"=>$id])
            ->select()
            ->first();

        if($data==null){
            return CommonUtility::getErrorResponse("Not data");
        }

        Users::query()
            ->where(["id"=>$id])
            ->delete();
        return CommonUtility::getSuccessResponse("","Delete");
    }

    public function UserSearch(Request $request){
        $keyword = $request->input("keyword");

        $data = Users::query()
            ->where([['id', 'like', '%' . $keyword . '%'],['role','!=', 0]])
            ->orWhere([['name', 'like', '%' . $keyword . '%'],['role','!=', 0]])
            ->orWhere([['email', 'like', '%' . $keyword . '%'],['role','!=', 0]])
            ->select("id", "name","email","avatar")
            ->get();
        return CommonUtility::getSuccessResponse($data, "Search");
    }
}