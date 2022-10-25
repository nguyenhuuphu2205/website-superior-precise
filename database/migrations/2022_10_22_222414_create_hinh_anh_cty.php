<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinhAnhCty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinh_anh_cty', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->string('ten_khong_dau');
            $table->string('hinh_anh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinh_anh_cty');
    }
}
