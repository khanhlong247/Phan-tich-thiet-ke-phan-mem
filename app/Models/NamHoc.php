<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamHoc extends Model
{
    use HasFactory;

    protected $table = 'nam_hoc';
    protected $primaryKey = 'MaNamHoc';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaNamHoc',
        'KhoaChuyenMon',
        'TenNamHoc',
        'ThoiGianBatDau',
        'ThoiGianKetThuc',
        'SoHocKy',
        'SoMonHoc',
        'SoGiangVien',
        'SoSinhVien',
    ];
}
