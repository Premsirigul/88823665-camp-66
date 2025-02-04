<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
//ส่งยืนยันอีเมล
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    //อยู่ในdatabase
    //Notifiable การแจ้งเตือนอีเมล
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    //สามารถinsertข้อมูลอะไรได้บ้าง
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    //จำชั้น
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    //การแปลงข้อมูลอัตโนมัติ
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}

//Artisan เป็น CLI (Command Line Interface) ของ Laravel ที่ช่วยให้เราสามารถรันคำสั่งต่าง ๆ ได้ง่ายขึ้น เช่น สร้างไฟล์, จัดการฐานข้อมูล, รันเซิร์ฟเวอร์, ล้างแคช เป็นต้น