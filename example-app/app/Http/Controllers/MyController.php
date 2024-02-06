<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title; // ต้องแน่ใจว่าใช้ชื่อ Model ที่ถูกต้อง

class MyController extends Controller
{
    private $myvar = "Hello World!";

    function __construct() //MyController
    {

    }

    public function index(){
        return view('home');
    }

    public function store(Request $req){
        $data['myinput'] = $req->input('myinput');
        return view('myroute', $data);
    }
    public function yourControllerMethod(){ // ตัวอย่างการดึงข้อมูล titles จากฐานข้อมูล

        $titles = Title::all(); // แทนคำสั่งดึงข้อมูลจากฐานข้อมูลตามโครงสร้างของคุณ
        return view('your-view-name', compact('titles'));
    }
}
