<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoanhNghiep extends Model
{
    use HasFactory;

    protected $table = 'doanh_nghiep';
    protected $primaryKey = 'MaDoanhNghiep';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaDoanhNghiep',
        'TenDoanhNghiep',
        'DiaChi',
        'Email',
        'SoDienThoai',
    ];
}
