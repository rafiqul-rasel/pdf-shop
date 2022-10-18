<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
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
            $table->string("book_title");
            $table->string("author_id");
            $table->string("bookcatagories_id");
            $table->string("source");
            $table->string("thumbnail");
            $table->string("edition");
            $table->string("page_no");
            $table->string("publisher");
            $table->string("isbn");
            $table->text("description");
            $table->date("pub_date");
            $table->bigInteger("price");
            $table->integer("copy");
            $table->date("arrival_date");

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
        Schema::dropIfExists('book');
    }
};
