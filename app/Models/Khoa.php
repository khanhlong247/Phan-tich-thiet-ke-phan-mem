<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{
    use HasFactory;

    protected $table = 'khoa';
    protected $primaryKey = 'MaKhoa';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaKhoa',
        'TenKhoa',
        'DiaChiVanPhong',
        'SoDienThoai',
    ];

    // Ví dụ: quan hệ với SinhVien
    public function sinhviens()
    {
        return $this->hasMany(SinhVien::class, 'KhoaChuyenMon', 'MaKhoa');
    }
}
