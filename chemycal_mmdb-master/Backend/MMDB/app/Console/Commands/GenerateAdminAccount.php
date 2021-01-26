<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class GenerateAdminAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create-admin-account {email} {password}';

//    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $email = $this->argument( 'email');
        $password =  $this->argument( 'password');

        $user = new Users();
        $user->name = "System Admin";
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->avatar = "";
        $user->role =0;
        $user->is_block =0;
        $user->token = Hash::make($user->id . Str::random(32));
        $user->save();

        echo "Create admin account successfully";
    }
}
