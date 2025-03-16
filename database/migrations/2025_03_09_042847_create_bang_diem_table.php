<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangDiemTable extends Migration
{
    public function up()
    {
        Schema::create('bang_diem', function (Blueprint $table) {
            $table->string('MaBangDiem', 10)->primary();
            $table->string('MaSinhVien', 10);
            $table->string('DanhGiaGV', 10);
            $table->string('DanhGiaDN', 10);
            $table->decimal('Diem', 4, 2)->nullable();
            $table->text('GhiChu')->nullable();
            $table->timestamps();

            $table->foreign('MaSinhVien')
                  ->references('MaSinhVien')->on('sinh_vien')
                  ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('DanhGiaGV')
                  ->references('MaDanhGia')->on('danh_gia_giang_vien')
                  ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('DanhGiaDN')
                  ->references('MaDanhGia')->on('danh_gia_doanh_nghiep')
                  ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bang_diem');
    }
}
