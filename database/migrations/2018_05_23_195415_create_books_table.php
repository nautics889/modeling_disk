<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title', 80);
            $table->text('description', 400);
            $table->string('picrel')->nullable();
            $table->boolean('instock')->nullable();
            $table->decimal('price', 10, 5)->nullable();
            $table->string('author', 120)->nullable();
            $table->string('type', 15);
            $table->string('kind', 30);
            $table->timestamps();
        });
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
