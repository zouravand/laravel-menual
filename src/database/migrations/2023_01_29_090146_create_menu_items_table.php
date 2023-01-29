<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Tedon\LaravelMenual\Models\MenuItem;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();

            $table->string('caption')->unique();
            $table->string('url')->nullable();
            $table->string('icon')->nullable();
            $table->string('thumbnail')->nullable();
            $table->unsignedTinyInteger('position')->default(0);

            $table->unsignedBigInteger('parent_id')->nullable();

            $table->unsignedTinyInteger('visibility')->default(MenuItem::VISIBILITY_VISIBLE);

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
        Schema::dropIfExists('menu_items');
    }
};
