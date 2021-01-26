<?php

namespace App\Http\Controllers\Api;

use App\Core\Business\Common\CommonService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class PhotoController extends Controller
{
    public function uploadPhoto(Request $request) {
        $paramsUpload = "upload";
        $relativePath = "";

        $arrFileUploaded = CommonService::uploadPhoto($request, $paramsUpload, $relativePath);

        $fileName = $arrFileUploaded[0]["url"];
        $url = $arrFileUploaded[0]["url"];

        return Response::json(["uploaded" => 1, "fileName" => $fileName, "url" => $url]);
    }
}
