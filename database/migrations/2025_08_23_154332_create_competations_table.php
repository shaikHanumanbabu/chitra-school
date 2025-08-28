<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competations', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Title of the service');
            $table->longText('description')->nullable();
            $table->integer(column: 'entry_fee')->nullable();
            $table->softDeletes(); // Removes 'deleted_at'
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
        Schema::dropIfExists('competations');
    }
}
