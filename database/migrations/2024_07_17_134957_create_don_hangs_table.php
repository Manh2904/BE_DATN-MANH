<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('don_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_don_hang',10);
            $table->unsignedBigInteger('user_id');
            $table->string('ten_nguoi_nhan', 100);
            $table->string('email_nguoi_nhan', 100);
            $table->string('so_dien_thoai_nguoi_nhan', 100);
            $table->string('dia_chi_nguoi_nhan', 100);
            $table->date('ngay_dat')->default(DB::raw('CURRENT_DATE'));
            $table->integer('tong_tien');
            $table->text('ghi_chu')->nullable();
            $table->unsignedBigInteger('phuong_thuc_thanh_toan_id');
            $table->unsignedBigInteger('trang_thai_don_hang_id');
            $table->softDeletes();
            $table->timestamps();

            // Khóa ngoại
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('phuong_thuc_thanh_toan_id')->references('id')->on('phuong_thuc_thanh_toans');
            $table->foreign('trang_thai_don_hang_id')->references('id')->on('trang_thai_don_hangs');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_hangs');
    }
};