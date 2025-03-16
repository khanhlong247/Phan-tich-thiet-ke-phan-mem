<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonHocTable extends Migration
{
    public function up()
    {
        Schema::create('mon_hoc', function (Blueprint $table) {
            $table->string('MaMonHoc', 10)->primary();
            $table->string('TenMonHoc', 100);
            $table->integer('SoTinChi')->default(2);
            $table->string('HocKyHienTai', 10);
            $table->date('ThoiGianBatDau');
            $table->date('ThoiGianKetThuc');
            $table->integer('SoSinhVien')->default(0);
            $table->integer('SoGiangVien')->default(0);
            $table->string('HinhThucHoc', 50);
            $table->string('HinhThucThi', 50);
            $table->timestamps();

            $table->foreign('HocKyHienTai')
                  ->references('MaHocKy')->on('hoc_ky')
                  ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mon_hoc');
    }
}
