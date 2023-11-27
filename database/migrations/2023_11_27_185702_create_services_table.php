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
        Schema::create('services', function (Blueprint $table) {
            $table->uuid('id')->primary()->index();
            $table->string('name')->unique();
            $table->decimal('minimum_value', 10, 2);
            $table->integer('amount_hours');
            $table->decimal('percentage', 10, 2);
            $table->decimal('bedroom_value', 10, 2);
            $table->integer('bedroom_hours');
            $table->decimal('living_room_value', 10, 2);
            $table->integer('living_room_hours');
            $table->decimal('bathroom_value', 10, 2);
            $table->integer('bathroom_hours');
            $table->decimal('kitchen_value', 10, 2);
            $table->integer('kitchen_hours');
            $table->decimal('yard_value', 10, 2);
            $table->integer('yard_hours');
            $table->decimal('others_value', 10, 2);
            $table->integer('others_hours');
            $table->string('icon');
            $table->integer('position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
