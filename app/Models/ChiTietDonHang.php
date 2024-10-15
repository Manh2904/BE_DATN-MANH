<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;
    protected $table = 'chi_tiet_don_hangs';
    protected $fillable = [
        'ma_chi_tiet_don_hang',
        'don_hang_id',
        'san_pham_id',
        'bien_the_san_pham_id',
        'so_luong',
        'gia',
        'thanh_tien'
    ];
    public $timestamps = false;
}