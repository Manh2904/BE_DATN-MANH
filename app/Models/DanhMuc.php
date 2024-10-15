<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DanhMuc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'danh_mucs';
    protected $fillable = [
        'ma_danh_muc',
        'ten_danh_muc',
        'ngay_nhap',
        'deleted_at'
    ];
    public $timestamps = false;
}