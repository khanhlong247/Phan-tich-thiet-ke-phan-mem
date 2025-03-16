<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhGiaDoanhNghiepTable extends Migration
{
    public function up()
    {
        Schema::create('danh_gia_doanh_nghiep', function (Blueprint $table) {
            $table->string('MaDanhGia', 10)->primary();
            $table->string('MaDoanhNghiep', 10);
            $table->string('MaSinhVien', 10);
            $table->text('NhanXet')->nullable();
            $table->timestamps();

            $table->foreign('MaDoanhNghiep')
                  ->references('MaDoanhNghiep')->on('doanh_nghiep')
                  ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('MaSinhVien')
                  ->references('MaSinhVien')->on('sinh_vien')
                  ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('danh_gia_doanh_nghiep');
    }
}
