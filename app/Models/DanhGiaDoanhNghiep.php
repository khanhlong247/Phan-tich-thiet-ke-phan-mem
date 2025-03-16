<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGiaDoanhNghiep extends Model
{
    use HasFactory;

    protected $table = 'danh_gia_doanh_nghiep';
    protected $primaryKey = 'MaDanhGia';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaDanhGia',
        'MaDoanhNghiep',
        'MaSinhVien',
        'NhanXet',
    ];
}
