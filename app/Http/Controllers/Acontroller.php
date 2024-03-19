<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Basecontroller 클래스 불러오기
use App\Http\Controllers\BaseController;

class Acontroller extends Controller
{
    // 클래스 안에서만 쓸 수 있는 내부 변수
    protected $result;
    protected $basecontroller;

    // 내부 변수의 기본값을 설정하는 생성자
    public function __construct(BaseController $basecontroller)
{
    $this->basecontroller = $basecontroller;
}
    public function multiple($num)
    {
        // Basecontroller 클래스의 plus 메서드 호출 후 10을 곱한 값을 반환
        $this->result = $this->basecontroller->plus($num) * 10;
        return $this->result;
    }
}
