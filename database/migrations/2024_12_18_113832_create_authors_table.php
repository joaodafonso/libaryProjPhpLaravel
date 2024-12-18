<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('country', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('authors');
    }
};
