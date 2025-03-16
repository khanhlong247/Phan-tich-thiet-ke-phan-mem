<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    use HasFactory;

    protected $table = 'mon_hoc';
    protected $primaryKey = 'MaMonHoc';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaMonHoc',
        'TenMonHoc',
        'SoTinChi',
        'HocKyHienTai',
        'ThoiGianBatDau',
        'ThoiGianKetThuc',
        'SoSinhVien',
        'SoGiangVien',
        'HinhThucHoc',
        'HinhThucThi',
    ];
}
