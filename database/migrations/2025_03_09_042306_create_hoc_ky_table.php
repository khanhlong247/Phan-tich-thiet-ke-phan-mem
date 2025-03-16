<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHocKyTable extends Migration
{
    public function up()
    {
        Schema::create('hoc_ky', function (Blueprint $table) {
            $table->string('MaHocKy', 10)->primary();
            $table->string('TenHocKy', 100);
            $table->string('NamHocHienTai', 10);
            $table->date('ThoiGianBatDau');
            $table->date('ThoiGianKetThuc');
            $table->integer('SoMonHoc')->default(0);
            $table->integer('SoSinhVien')->default(0);
            $table->integer('SoGiangVien')->default(0);
            $table->timestamps();

            $table->foreign('NamHocHienTai')
                  ->references('MaNamHoc')->on('nam_hoc')
                  ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('hoc_ky');
    }
}
