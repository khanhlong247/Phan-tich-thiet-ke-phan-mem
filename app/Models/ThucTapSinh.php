<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThucTapSinh extends Model
{
    use HasFactory;

    protected $table = 'thuc_tap_sinh';
    protected $primaryKey = 'MaThucTap';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaThucTap',
        'SinhVienThucTap',
        'GiangVienHuongDan',
        'DoanhNghiepThucTap',
        'TrangThai',
    ];
}
