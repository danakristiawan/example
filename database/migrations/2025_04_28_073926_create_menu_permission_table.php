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
        Schema::create('menu_permission', function (Blueprint $table) {
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('permission_id');

            $table->foreign('menu_id')
                ->references('id') // menu id
                ->on('menus')
                ->onDelete('cascade');

            $table->foreign('permission_id')
                ->references('id') // permission id
                ->on('permissions')
                ->onDelete('cascade');

            $table->primary(['menu_id', 'permission_id'], 'menu_permission_menu_id_permission_id_primary');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_permission');
    }
};
