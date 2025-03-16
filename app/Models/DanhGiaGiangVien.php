<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGiaGiangVien extends Model
{
    use HasFactory;

    protected $table = 'danh_gia_giang_vien';
    protected $primaryKey = 'MaDanhGia';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaDanhGia',
        'MaSinhVien',
        'MaGiangVien',
        'DiaDiemThucTap',
        'NhanXet',
        'LuuY',
    ];
}
