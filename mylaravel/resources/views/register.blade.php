@extends('layouts.default')

@section('content')
<div class="register-page">
    <div class="register-box">
        <div class="register-logo">
          <a href="../index2.html"><b>Admin</b>LTE</a>
        </div>
        <!-- /.register-logo -->
        <div class="card">
          <div class="card-body register-card-body">
            <p class="register-box-msg">Register a new membership</p>
            <form action="{{ url('/register') }}" onsubmit="return myfunction();" method="post">
                @csrf <!-- ทุกครั้งที่ทำฟอร์มให้ใส่ด้วยไม่งั้นข้อมูลจะไม่ส่งค่าไป -->
              <div class="input-group mb-3">
                <input type="text" name="name" id ="name" class="form-control" placeholder="Full Name" />
                <div class="input-group-text"><span class="bi bi-person"></span></div>
                <div class="valid-feedback">
                  OK
                </div>
                <div class="invalid-feedback" id = "invalid-name">
                  กรุณาระบุข้อมูล name
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="email" name="email" id ="email" class="form-control" placeholder="Email" />
                <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                <div class="valid-feedback">
                   Looks good!
                </div>
                <div class="invalid-feedback" id="invalid-email">
                   Please enter your email.
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" name="password" id ="pass" class="form-control" placeholder="Password" />
                <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                <div class="valid-feedback">
                    Looks good!
                  </div>
                 <div class="invalid-feedback" id="invalid-pass">
                   Please enter your password.
                 </div>
              </div>
              <!--begin::Row-->
              <div class="row">
                <div class="col-8">
                  <div class="form-check">
                    <input class="form-check-input"id ="mycheckbox" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree to the <a href="#">terms</a>
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!--end::Row-->
            </form>
            <button  class ="btn" onelick= "myfunction()">Click me</button>
            
            <!-- /.social-auth-links -->
            <p class="mb-0">
              <a href="login.html" class="text-center"> I already have a membership </a>
            </p>
          </div>
          <!-- /.register-card-body -->
        </div>
      </div>
</div>
@endsection

@section('scripts')
<script>
  let $myval
  var myval2 = "value of myval22"
  console.log("hello world")
  //alert("hello")
function myfunction() {
  let name = document.getElementById('name') // ดึง input ที่มี id="name"
  name =$('#name')  // เปลี่ยน name เป็น jQuery Object 
  let email = document.getElementById('email')
  email =$('#email') 
  let pass = document.getElementById('pass')
  pass =$('#pass') 
  let mycheckbox = document.getElementById('mycheckbox')
  //name.value = "My Name Value" ใช้ไม่ได้กับ jQuery
  //name.val("My Name Value")  // ใช้ .val() ของ jQuery เพื่อกำหนดค่า
  console.log(name.val() ,email.value ,
                pass.value ,mycheckbox.checked)
  if (name.val()=="") {
      name.addClass('is-invalid')
      $('#invalid-name').html("<b>กรุณาระบุ name <b>") // เปลี่ยนเนื้อหาภายในของ #myElement
      return false;
  }else{
    name.removeClass('is-invalid')
  }
  
   // ตรวจสอบอีเมลว่ามี @ และ . หรือไม่
   let emailPattern = /@.*\./;
            if (!emailPattern.test(email)) {
                $('#email').addClass('is-invalid');
                $('#invalid-email').html("<b><u>กรุณากรอกอีเมลให้ถูกต้อง</u></b>");
                return false;
            } else {
                $('#email').removeClass('is-invalid');
            }

            let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]+$/;
            if (!passwordPattern.test(pass)) {
                $('#pass').addClass('is-invalid');
                $('#invalid-pass').html("<b><u>รหัสผ่านจะต้องประกอบไปด้วย a-z, A-Z, 0-9</u></b>");
                return false;
            } else {
                $('#pass').removeClass('is-invalid');
            }

            // เช็คว่า checkbox ถูกติ๊กมั้ย
            if (!mycheckbox) {
                $('mycheckbox').addClass('is-invalid');
                alert('กรุณายอมรับข้อกำหนด');
                return false;
            }

            return true;
}
//myfunction()
</script>
<script>
  //console.log(myval2)
</script>
@endsection