<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViTriThucTap extends Model
{
    use HasFactory;

    protected $table = 'vi_tri_thuc_tap';
    protected $primaryKey = 'MaViTriThucTap';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaViTriThucTap',
        'DoanhNghiepThucTap',
        'GiangVienHuongDan',
        'SoLuongTuyenDung',
        'ViTriThucTap',
    ];
}
