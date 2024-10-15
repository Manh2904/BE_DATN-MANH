<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThuocTinhVaGiaTriBienThe extends Model
{
    use HasFactory;
    protected $table = 'thuoc_tinh_va_gia_tri_bien_thes';

    protected $fillable = [
    'ma_thuoc_tinh_va_gia_tri',
    'thuoc_tinh_bien_the_id',
    'gia_tri_thuoc_tinh_bien_the_id'
];
    public $timestamps = false;
}