<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaoCaoThucTapTable extends Migration
{
    public function up()
    {
        Schema::create('bao_cao_thuc_tap', function (Blueprint $table) {
            $table->string('MaBaoCao', 10)->primary();
            $table->string('SinhVienThucTap', 10);
            $table->string('DiaDiemThucTap', 10);
            $table->text('BaoCao')->nullable();
            $table->timestamps();

            $table->foreign('SinhVienThucTap')
                  ->references('MaSinhVien')->on('sinh_vien')
                  ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('DiaDiemThucTap')
                  ->references('MaViTriThucTap')->on('vi_tri_thuc_tap')
                  ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bao_cao_thuc_tap');
    }
}
