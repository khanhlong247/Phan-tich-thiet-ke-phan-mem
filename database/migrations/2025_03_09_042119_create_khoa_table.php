<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhoaTable extends Migration
{
    public function up()
    {
        Schema::create('khoa', function (Blueprint $table) {
            $table->string('MaKhoa', 10)->primary();
            $table->string('TenKhoa', 100);
            $table->string('DiaChiVanPhong', 200);
            $table->string('SoDienThoai', 15);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('khoa');
    }
}
