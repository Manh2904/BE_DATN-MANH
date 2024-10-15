<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BienTheSanPham extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'bien_the_san_phams';
    protected $fillable = [
        'ma_bien_the_san_pham',
        'anh_bien_the_san_pham',
        'san_pham_id',
        'gia',
        'so_luong',
        'deleted_at'
    ];
    public $timestamps = false;
}