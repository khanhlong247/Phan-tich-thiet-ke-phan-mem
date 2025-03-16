<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    use HasFactory;

    protected $table = 'sinh_vien';
    protected $primaryKey = 'MaSinhVien';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaSinhVien',
        'TenSinhVien',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'Email',
        'SoDienThoai',
        'NganhHoc',
        'NienKhoa',
        'GPA',
        'SoHocPhanTichLuy',
        'SoHocPhanNo',
        'TinhTrangHocTap',
        'KhoaChuyenMon',
    ];
}
