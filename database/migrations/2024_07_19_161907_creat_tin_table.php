<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tins', function(Blueprint $table){
            $table->id();
            $table->string('tieu_de', 255);
            $table->string('tom_tat', 255);
            $table->string('noi_dung', 1000);
            $table->string('hinh_anh',255);
            $table->integer('id_danh_muc');
            $table->dateTime('ngay_dang');
            $table->integer('luot_xem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tins');
    }
};
