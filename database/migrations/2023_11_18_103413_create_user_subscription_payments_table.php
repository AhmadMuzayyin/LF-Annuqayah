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
        Schema::create('user_subscription_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\UserSubscription::class)->constrained()->cascadeOnDelete();
            $table->decimal('amount_price');
            $table->date('payment_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_subscription_payments');
    }
};
