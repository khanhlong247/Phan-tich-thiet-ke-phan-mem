<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonDangKyViTriThucTap extends Model
{
    use HasFactory;

    protected $table = 'don_dang_ky_vi_tri_thuc_tap';
    protected $primaryKey = 'MaDonDKVT';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaDonDKVT',
        'DoanhNghiepDangKy',
        'TenViTriThucTap',
        'DiaDiemThucTap',
        'MoTa',
        'YeuCauDauVao',
        'ThoiGianThucTap',
        'SoLuongTuyenDung',
        'TrangThai',
    ];
}
