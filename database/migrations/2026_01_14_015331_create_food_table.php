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
        Schema::create('food', function (Blueprint $table) {
            $table->id(); //id uni makanan
            $table->foreignId('category_id')->constrained()->cascadeOnDelete(); //masuk kategory
            $table->string('name'); //nama makanan
            $table->string('slug')->unique(); //url SEO
            $table->decimal('price',12, 2)->nullable(); // Harga
            $table->decimal('cost',12, 2)->nullable(); // modal 
            $table->text('description')->nullable(); // deskripsi
            $table->string('image_path')->nullable(); // path foto makanan
            $table->boolean('is_active')->default(true); // bisa di jual atau tidak
            $table->integer('stock')->default(0); // persidiaan 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
