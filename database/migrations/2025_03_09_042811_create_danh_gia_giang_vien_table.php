<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhGiaGiangVienTable extends Migration
{
    public function up()
    {
        Schema::create('danh_gia_giang_vien', function (Blueprint $table) {
            $table->string('MaDanhGia', 10)->primary();
            $table->string('MaSinhVien', 10);
            $table->string('MaGiangVien', 10);
            $table->string('DiaDiemThucTap', 10);
            $table->text('NhanXet')->nullable();
            $table->text('LuuY')->nullable();
            $table->timestamps();

            $table->foreign('MaSinhVien')
                  ->references('MaSinhVien')->on('sinh_vien')
                  ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('MaGiangVien')
                  ->references('MaGiangVien')->on('giang_vien')
                  ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('DiaDiemThucTap')
                  ->references('MaViTriThucTap')->on('vi_tri_thuc_tap')
                  ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('danh_gia_giang_vien');
    }
}
