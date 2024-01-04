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
        Schema::create('wastes', function (Blueprint $table) {
            $table->id();
            $table->string('waste_type');
            $table->integer('quantity');
            $table->string('image')->nullable();
            $table->string('location');
            $table->integer('starting_price');
            $table->enum('status', ['pending', 'bidding', 'sold']);
            $table->integer('sold_at')->nullable();
            $table->enum('collection_status', ['pending', 'collected', 'rejected']);
            $table->string('characteristics');
            $table->text('notes');
            $table->unsignedBigInteger('supplier_id');
            $table->timestamps();

            $table->foreign('supplier_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wastes');
    }
};
