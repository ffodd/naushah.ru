<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('event_names', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('id_type')->unsigned();
            $table->foreign('id_type')->references('id')->on('event_types')->onDeleted('cascade');
            $table->text('desc');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_names');
    }
};
