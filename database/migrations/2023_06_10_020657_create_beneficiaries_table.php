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
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->comment('người thụ hưởng');
            $table->date('date_of_birth')->nullable();
            $table->string('relationship')->comment('Mối quan hệ giữa người thụ hưởng và khách hàng');
            $table->integer('policy_id')->comment('liên kết với chính sách bảo hiểm');
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
        Schema::dropIfExists('beneficiaries');
    }
};
