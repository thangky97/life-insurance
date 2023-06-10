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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->date('payment_date')->comment('ngày thanh toán');
            $table->string('amount')->comment('số tiền thanh toán');
            $table->integer('policy_id')->comment('liên kết với chính sách bảo hiểm');
            $table->softDeletes();
            $table->integer('status_payment')->comment('trạng thái thanh toán');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
