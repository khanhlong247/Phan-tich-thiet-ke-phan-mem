<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiangVien extends Model
{
    use HasFactory;

    protected $table = 'giang_vien';
    protected $primaryKey = 'MaGiangVien';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaGiangVien',
        'TenGiangVien',
        'ChuyenNganh',
        'NgaySinh',
        'GioiTinh',
        'SoDienThoai',
        'Email',
        'DiaChi',
        'HocVi',
        'LoaiHopDong',
        'KhoaChuyenMon',
    ];
}
