<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; //Sử dụng thư viện bên ngoài
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB; //Sử dụng thư viện bên ngoài

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
            'ma_khach_hang' => "KH-".Str::random(6),
            'name' => 'cao văn manh',
            'so_dien_thoai' => '0394263056',
            'email' => 'manhcvph40187@fpt.edu.vn',
            'dia_chi' => 'Xuan Phuong, Hà Nội',
            'trang_thai' => 1,
            'vai_tro' => 2,
            'ngay_tao' => Carbon::now(), //Lấy ngày
            'mat_khau' => 'LongLV#123',
            'password' => Hash::make('LongLV#123'),
        ]
    ]);
    User::factory()->count(50)->create();
    }
}