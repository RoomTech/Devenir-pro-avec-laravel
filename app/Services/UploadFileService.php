<?php

namespace App\Services;


class UploadFileService
{
  public function upload($file, $path)
  {
    $fileName = $file->store($path);
    return $fileName;
  }
}
