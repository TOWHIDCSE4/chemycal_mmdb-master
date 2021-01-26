<?php
/**
 * Created by PhpStorm.
 * User: Hoi1102
 * Date: 3/7/2019
 * Time: 11:26 AM
 */

namespace App\Core\Business\Common;


use App\Core\Utility\CommonUtility;
use Illuminate\Support\Facades\Response;

class CommonService
{
    public static function uploadPhoto($request, $paramUpload, $relativePath) {
        $basePath = "/templateEditor/kcfinder/upload/images";

        $arrFileUploaded = [];

        if($request->hasFile($paramUpload))
        {
            $file = $request->file($paramUpload);

            // Save photo to disk
            $milliseconds = round(microtime(true) * 1000);
            $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $randName = CommonUtility::randomCharacter(5);
            $fileName = $milliseconds . "_" . $randName . ".$ext";
            $file->storeAs($relativePath, $fileName, "upload");

            $fileStorePath = $relativePath . "/" . $fileName;

            // Get image size
            list($imageWidth, $imageHeight) = getimagesize(public_path($basePath) . "/" . $fileStorePath);


            $arrFileUploaded[] = [
                'path' => $fileStorePath,
                'url' => url($basePath . "/" . $fileStorePath),
                'image_width' => $imageWidth,
                'image_height' => $imageHeight
            ];
        }


        return $arrFileUploaded;
    }
}