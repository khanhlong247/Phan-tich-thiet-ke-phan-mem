<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaoCaoThucTap extends Model
{
    use HasFactory;

    protected $table = 'bao_cao_thuc_tap';
    protected $primaryKey = 'MaBaoCao';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaBaoCao',
        'SinhVienThucTap',
        'DiaDiemThucTap',
        'BaoCao',
    ];
}
