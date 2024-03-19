<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // 파일이 전송되었는지 확인합니다.
        if ($request->hasFile('file')) {
            // 파일이 유효한지 확인합니다.
            if ($request->file('file')->isValid()) {
                // 파일을 저장할 디렉토리 경로를 설정합니다.
                $directory = 'uploads';

                // 실제 파일을 저장합니다.
                $path = $request->file('file')->store($directory);

                // 저장된 파일의 URL을 반환합니다.
                return asset($path);
            }
        }

        // 파일이 없거나 유효하지 않은 경우 에러 메시지를 반환합니다.
        return 'File upload failed!';
    }
}
