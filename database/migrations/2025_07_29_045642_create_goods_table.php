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
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('goods_name');
            $table->integer('category_id');
            $table->integer('situation_id');
            $table->string('transaction_type');
            $table->string('size')->nullable();
            $table->string('quantity');
            $table->text('explanation');
            $table->date('listing_deadline');
            $table->integer('trading_status_id');
            $table->integer('account_id');
            $table->boolean('delete_flag')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goods');
    }
};
