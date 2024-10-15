<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DanhGia extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'danh_gias';
    protected $fillable = [
        'ma_danh_gia',
        'san_pham_id',
        'user_id',
        'chi_tiet_don_hang_id',
        'sao',
        'noi_dung',
        'ngay_danh_gia',
        'deleted_at'
    ];
    public $timestamps = false;
}