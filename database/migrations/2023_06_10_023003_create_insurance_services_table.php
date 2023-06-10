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
        Schema::create('insurance_services', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id')->comment('liên kết với dịch vụ');
            $table->integer('type_id')->comment('liên kết với loại bảo hiểm');
            $table->softDeletes();
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_services');
    }
};
