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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('calling_date')->comment('Ngày gọi');
            $table->date('call_back')->comment('Gọi lại');
            $table->date('date_of_birth')->nullable();
            $table->string('address');
            $table->string('phone_number');
            $table->string('source')->comment('nguồn lấy khách tư vấn');
            $table->string('email')->unique()->nullable();
            $table->integer('gender');
            $table->text('content');
            $table->integer('service_id')->comment('Tên dịch vụ sd');
            $table->integer('status_customer')->comment('trạng thái khách hàng');
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
        Schema::dropIfExists('customers');
    }
};
