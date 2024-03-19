<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Upload extends Component
{
    use WithFileUploads;

    public $photo; // $photo 변수를 선언합니다.
    public $path; // $path 변수를 선언합니다.

    public function save()
    {
        // validate 오타 수정
        $this->validate([
            'photo' => 'image|max:1024', // 파일 유효성 검사 규칙을 설정합니다.
        ]);

        // storeAs() 메서드를 사용하여 파일을 저장합니다.
        $abs_root = $this->photo->storeAs("public", "testimage.png");

        // 저장된 파일의 URL을 얻어옵니다.
        $this->path = Storage::url($abs_root);
    }

    public function render()
    {
        return view('livewire.upload');
    }
}
