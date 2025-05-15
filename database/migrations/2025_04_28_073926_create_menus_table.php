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
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icon');
            $table->string('name');
            $table->string('url');
            $table->timestamps();
            $table->unique(['name', 'url']);
        });

        Schema::create('permission_has_menus', function (Blueprint $table) {
            $table->unsignedBigInteger('permission_id');
            $table->unsignedBigInteger('menu_id');

            $table->foreign('permission_id')
                ->references('id') // permission id
                ->on('permissions')
                ->onDelete('cascade');

            $table->foreign('menu_id')
                ->references('id') // menu id
                ->on('menus')
                ->onDelete('cascade');

            $table->primary(['permission_id', 'menu_id'], 'permission_has_menus_permission_id_menu_id_primary');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
        Schema::dropIfExists('permission_has_menus');
    }
};
