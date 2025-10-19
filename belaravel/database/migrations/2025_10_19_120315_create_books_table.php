<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\BookLanguage;
use App\Enums\BookStatus;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_code');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('author');
            $table->unsignedInteger('publication_year'); # hanya bilangan positif
            $table->string('isbn');
            $table->string('language')->default(BookLanguage::INDONESIA->value);
            $table->text('synopsis')->nullable();
            $table->unsignedInteger('number_of_page')->default(0);
            $table->string('status')->default(BookStatus::AVAILABLE->value);
            $table->string('cover')->nullable(); // Gambar sampul buku
            $table->unsignedInteger('price')->default(0); 
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete(); # foreign key ke tabel categories
            $table->foreignId('publisher_id')->constrained('publishers')->cascadeOnDelete(); # foreign key ke tabel publishers
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
