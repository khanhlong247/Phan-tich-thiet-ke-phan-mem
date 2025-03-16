<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamHocTable extends Migration
{
    public function up()
    {
        Schema::create('nam_hoc', function (Blueprint $table) {
            $table->string('MaNamHoc', 10)->primary();
            $table->string('KhoaChuyenMon', 10);
            $table->string('TenNamHoc', 50);
            $table->date('ThoiGianBatDau');
            $table->date('ThoiGianKetThuc');
            $table->integer('SoHocKy')->default(0);
            $table->integer('SoMonHoc')->default(0);
            $table->integer('SoGiangVien')->default(0);
            $table->integer('SoSinhVien')->default(0);
            $table->timestamps();

            $table->foreign('KhoaChuyenMon')
                  ->references('MaKhoa')->on('khoa')
                  ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('nam_hoc');
    }
}
