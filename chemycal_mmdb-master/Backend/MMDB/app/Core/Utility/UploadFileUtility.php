<?php
/**
 * Created by PhpStorm.
 * User: MinhVu
 * Date: 10/31/2019
 * Time: 5:58 PM
 */

namespace App\Core\Utility;


class UploadFileUtility
{
    public static function uploadPhoto($request, $paramUpload, $relativePath) {
        $basePath = "/images/upload";

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