<?php

namespace App\Http\Controllers; //Laravel ใช้ Namespace เพื่อจัดการคลาสต่าง ๆ ให้เป็นระเบียบ


use Illuminate\Http\Request; //Request: ใช้จัดการคำขอ (HTTP Request) ที่ส่งมาจากฟอร์มลงทะเบียน

use App\Models\User; //User: เป็น Model ที่ใช้เชื่อมกับฐานข้อมูลของตาราง users

class RegisterController extends Controller
{
    function index(){ //เป็นเมธอดที่ใช้แสดงหน้า Register Form (register.blade.php)
        return view('register');  //จะโหลด View ที่ชื่อว่า register.blade.php
    }

    function create(Request $req){ //Request เป็นเครื่องมือสำคัญใน Laravel ที่ช่วยรับค่าจากฟอร์ม ตรวจสอบ และจัดการข้อมูลที่ส่งเข้ามาอย่างปลอดภัย  Request: ใช้จัดการคำขอ (HTTP Request) ที่ส่งมาจากฟอร์มลงทะเบียน
        print_r($req->input());
        $obj_user = new User;
        $obj_user->name = $req->input('name');
        $obj_user->email = $req->email;
        $obj_user->password = $req->password;
        $obj_user->save(); //บันทึกลงฐานข้อมูล

        return redirect('/users'); //ใน Laravel สามารถใช้ redirect() เพื่อเปลี่ยนเส้นทางหลังจากทำงานเสร็จ 
    }
}