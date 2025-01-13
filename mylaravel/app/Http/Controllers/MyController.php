<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    function myfunction(Request $req){
            $data = $req->input('myinput'); // ดึงค่าจากฟอร์มที่มี input name="myinput" และเก็บไว้ในตัวแปร $data
            return view('myview', ['myinput' => $data]); // ส่งค่าที่รับมาไปยัง view ชื่อ 'myview' พร้อมข้อมูลในรูปแบบ array
    }
}