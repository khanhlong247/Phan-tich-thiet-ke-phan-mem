<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonDangKyViTriThucTapTable extends Migration
{
    public function up()
    {
        Schema::create('don_dang_ky_vi_tri_thuc_tap', function (Blueprint $table) {
            $table->string('MaDonDKVT', 10)->primary();
            $table->string('DoanhNghiepDangKy', 10);
            $table->string('TenViTriThucTap', 100);
            $table->string('DiaDiemThucTap', 200);
            $table->text('MoTa')->nullable();
            $table->text('YeuCauDauVao')->nullable();
            $table->string('ThoiGianThucTap', 50);
            $table->integer('SoLuongTuyenDung');
            $table->string('TrangThai', 50)->nullable(); // 'Được duyệt' hoặc 'Không được duyệt'
            $table->timestamps();

            $table->foreign('DoanhNghiepDangKy')
                  ->references('MaDoanhNghiep')->on('doanh_nghiep')
                  ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('don_dang_ky_vi_tri_thuc_tap');
    }
}
