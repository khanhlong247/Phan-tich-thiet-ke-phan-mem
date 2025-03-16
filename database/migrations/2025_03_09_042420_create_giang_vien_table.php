<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiangVienTable extends Migration
{
    public function up()
    {
        Schema::create('giang_vien', function (Blueprint $table) {
            $table->string('MaGiangVien', 10)->primary();
            $table->string('TenGiangVien', 100);
            $table->string('ChuyenNganh', 100);
            $table->date('NgaySinh');
            $table->string('GioiTinh', 10);
            $table->string('SoDienThoai', 15);
            $table->string('Email', 100)->unique();
            $table->string('DiaChi', 200);
            $table->string('HocVi', 50);
            $table->string('LoaiHopDong', 50);
            $table->string('KhoaChuyenMon', 10);
            $table->timestamps();

            $table->foreign('KhoaChuyenMon')
                  ->references('MaKhoa')->on('khoa')
                  ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('giang_vien');
    }
}
