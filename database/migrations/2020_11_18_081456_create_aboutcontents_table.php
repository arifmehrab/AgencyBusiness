<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutcontentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutcontents', function (Blueprint $table) {
            $table->id();
            $table->string('about_title')->nullable();
            $table->text('our_mission')->nullable();
            $table->text('our_vision')->nullable();
            $table->text('our_history')->nullable();
            $table->longText('about_content')->nullable();
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
        Schema::dropIfExists('aboutcontents');
    }
}
