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
        Schema::create('member_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->double('price', 8, 2)->default(0.00);
            $table->integer('duration_day');
            $table->boolean('is_with_trainer')->default(false);
            $table->integer('duration_trainer');
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('member_packages', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
