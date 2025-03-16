<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinhVienTable extends Migration
{
    public function up()
    {
        Schema::create('sinh_vien', function (Blueprint $table) {
            $table->string('MaSinhVien', 10)->primary();
            $table->string('TenSinhVien', 100);
            $table->date('NgaySinh');
            $table->string('GioiTinh', 10);
            $table->string('DiaChi', 200);
            $table->string('Email', 100)->unique();
            $table->string('SoDienThoai', 15);
            $table->string('NganhHoc', 100);
            $table->string('NienKhoa', 20);
            $table->decimal('GPA', 3, 2)->nullable();
            $table->integer('SoHocPhanTichLuy');
            $table->integer('SoHocPhanNo')->default(0);
            $table->string('TinhTrangHocTap', 50)->default('Đang học');
            $table->string('KhoaChuyenMon', 10);
            $table->timestamps();

            $table->foreign('KhoaChuyenMon')
                  ->references('MaKhoa')->on('khoa')
                  ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sinh_vien');
    }
}
