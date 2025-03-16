<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonDangKyThucTapTable extends Migration
{
    public function up()
    {
        Schema::create('don_dang_ky_thuc_tap', function (Blueprint $table) {
            $table->string('MaDonDKTT', 10)->primary();
            $table->string('DoanhNghiepThucTap', 10);
            $table->string('SinhVienThucTap', 10);
            $table->string('GiangVienHuongDan', 10)->nullable();
            $table->string('TrangThai', 50)->nullable(); // 'Được duyệt' hoặc 'Không được duyệt'
            $table->timestamps();

            $table->foreign('DoanhNghiepThucTap')
                  ->references('MaDoanhNghiep')->on('doanh_nghiep')
                  ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('SinhVienThucTap')
                  ->references('MaSinhVien')->on('sinh_vien')
                  ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('GiangVienHuongDan')
                  ->references('MaGiangVien')->on('giang_vien')
                  ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('don_dang_ky_thuc_tap');
    }
}
