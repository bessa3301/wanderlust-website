<?php

use App\Enum\LangsEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteInfosTable extends Migration
{
    public function up()
    {
        Schema::create('website_infos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('key');
            $table->text('value');
            $table->enum('lang', [LangsEnum::BRAZILIAN_PORTUGUESE, LangsEnum::UNITED_STATES_ENGLISH]);
            $table->unsignedBigInteger('page_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('website_infos');
    }
}
