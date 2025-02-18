<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
//เป็นการเช็ครหัสการเข้ารหัส
class LoginController extends Controller
{
    //
    function index(){
        return view('login');
    }
    function login(Request $req){
       // print_r($req->input());
        $user = User::where('email',$req->email)->first();
        if ($user!= null && Hash::check($req->password,$user->password)) {
            //$req->password → รหัสผ่านที่ผู้ใช้ป้อนจากฟอร์ม
            //$user->password → รหัสผ่านที่ถูกเข้ารหัส (hashed password) ในฐานข้อมูล
            $req->session()->put('user',$user);
           //session()->forget('error');
           //session(['user'=> $user]);
            return redirect('/users');//การเปลี่ยน/

       }else {
          $req->session(['error','กรุณาตรวจสอบข้อมูลอีกครั้ง']);
          return redirect('/login');
       }
}}