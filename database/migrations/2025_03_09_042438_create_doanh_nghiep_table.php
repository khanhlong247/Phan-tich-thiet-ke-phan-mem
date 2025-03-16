<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoanhNghiepTable extends Migration
{
    public function up()
    {
        Schema::create('doanh_nghiep', function (Blueprint $table) {
            $table->string('MaDoanhNghiep', 10)->primary();
            $table->string('TenDoanhNghiep', 100);
            $table->string('DiaChi', 200);
            $table->string('Email', 100)->unique();
            $table->string('SoDienThoai', 15);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doanh_nghiep');
    }
}
