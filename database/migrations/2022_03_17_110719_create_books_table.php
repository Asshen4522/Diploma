<?php

use App\Models\book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover')->default("img/NoCover.png");
            $table->foreignId('genre_id')->constrained('genres');
            $table->foreignId('author_id')->constrained('authors');
            $table->text('description');
        });
        Book::create([
            'title' => "Гибель богов",
            'genre_id' => 2,
            'author_id' => 1,
            'description' => "Многие века властвует над Хьервардом семерка Молодых Богов, когда-то одолевших и свергших своих предшественников. Но теперь пришло время и им столкнуться с угрозой своей власти — маг Хедин, его ученик Хаген и его давний сподвижник Ракот поднимают мятеж, и в разгоревшейся войне Хьервард может измениться до неузнаваемости..."
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
