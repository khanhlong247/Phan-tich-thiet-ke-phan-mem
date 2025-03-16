<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonDangKyThucTap extends Model
{
    use HasFactory;

    protected $table = 'don_dang_ky_thuc_tap';
    protected $primaryKey = 'MaDonDKTT';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaDonDKTT',
        'DoanhNghiepThucTap',
        'SinhVienThucTap',
        'GiangVienHuongDan',
        'TrangThai',
    ];
}
