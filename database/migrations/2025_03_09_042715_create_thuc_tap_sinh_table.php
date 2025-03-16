<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThucTapSinhTable extends Migration
{
    public function up()
    {
        Schema::create('thuc_tap_sinh', function (Blueprint $table) {
            $table->string('MaThucTap', 10)->primary();
            $table->string('SinhVienThucTap', 10);
            $table->string('GiangVienHuongDan', 10);
            $table->string('DoanhNghiepThucTap', 10);
            $table->string('TrangThai', 50)->nullable(); // 'Chưa thực tập', 'Đang thực tập', 'Thực tập xong'
            $table->timestamps();

            $table->foreign('SinhVienThucTap')
                  ->references('MaSinhVien')->on('sinh_vien')
                  ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('GiangVienHuongDan')
                  ->references('MaGiangVien')->on('giang_vien')
                  ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('DoanhNghiepThucTap')
                  ->references('MaDoanhNghiep')->on('doanh_nghiep')
                  ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('thuc_tap_sinh');
    }
}
