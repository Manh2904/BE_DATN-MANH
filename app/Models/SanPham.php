<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SanPham extends Model
{
    use HasFactory;
    use SoftDeletes;
    // Cách 1: viết SQL thuần (Raw Query)
    // public function getAll(){
    //     $listSanPham = DB::select('SELECT * FROM san_phams ORDER BY id DESC');
    //     return $listSanPham;
    // }

    // Cách 2: Sử dụng Query Builder
    // public function getAll(){
    //     $listSanPham = DB::table('san_phams')->orderByDesc('id')->get();
    //     return $listSanPham;
    // }

    //Thêm sản phẩm bằng QueryBuilder
    public function createSanPham($data){
     DB::table('san_phams')->insert($data);
    }

    // Cách 3: Sử dụng Eloquent
    protected $table = 'san_phams';

    protected $fillable = [
    'ma_san_pham',
    'ten_san_pham',
    'anh_san_pham',
    'gia',
    'so_luong',
    'mo_ta_ngan',
    'mo_ta',
    'luot_xem',
    'ngay_nhap',
    'danh_muc_id',
    'kieu_san_pham',
    'deleted_at'
];
    public $timestamps = false;
}