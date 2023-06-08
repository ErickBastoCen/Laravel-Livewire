<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->string('letter')->nullable();
            $table->string('name');
            $table->string('common_name')->nullable();
            $table->text('description');
            $table->text('references');

            $table->float('top');
            $table->float('left');
            $table->float('width');
            $table->float('height');
            $table->binary('image')->nullable();
        });

        DB::statement('ALTER TABLE buildings MODIFY image LONGBLOB');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buildings');
    }
};
