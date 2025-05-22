<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('search_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('blurb');           // short description
            $table->string('url');           // route or external URL
            $table->text('keywords');        // comma-separated keywords
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('search_items');
    }
};
