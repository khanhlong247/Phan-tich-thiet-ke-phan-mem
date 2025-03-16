<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViTriThucTapTable extends Migration
{
    public function up()
    {
        Schema::create('vi_tri_thuc_tap', function (Blueprint $table) {
            $table->string('MaViTriThucTap', 10)->primary();
            $table->string('DoanhNghiepThucTap', 10);
            $table->string('GiangVienHuongDan', 10)->nullable();
            $table->integer('SoLuongTuyenDung');
            $table->string('ViTriThucTap', 10); // Liên kết đến MaDonDKVT trong bảng don_dang_ky_vi_tri_thuc_tap
            $table->timestamps();

            $table->foreign('GiangVienHuongDan')
                  ->references('MaGiangVien')->on('giang_vien')
                  ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('DoanhNghiepThucTap')
                  ->references('MaDoanhNghiep')->on('doanh_nghiep')
                  ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('ViTriThucTap')
                  ->references('MaDonDKVT')->on('don_dang_ky_vi_tri_thuc_tap')
                  ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vi_tri_thuc_tap');
    }
}
