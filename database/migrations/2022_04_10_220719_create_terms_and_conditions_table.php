<?php

use App\Enum\LangsEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsAndConditionsTable extends Migration
{
    public function up()
    {
        Schema::create('terms_and_conditions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('term');
            $table->enum('lang', LangsEnum::EXISTING_LANGUAGES);
        });
    }

    public function down()
    {
        Schema::dropIfExists('terms_and_conditions');
    }
}
