<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BangDiem extends Model
{
    use HasFactory;

    protected $table = 'bang_diem';
    protected $primaryKey = 'MaBangDiem';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaBangDiem',
        'MaSinhVien',
        'DanhGiaGV',
        'DanhGiaDN',
        'Diem',
        'GhiChu',
    ];
}
