<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitePagesTable extends Migration
{
    public function up()
    {
        Schema::create('website_pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('home');
        });
    }

    public function down()
    {
        Schema::dropIfExists('website_pages');
    }
}
