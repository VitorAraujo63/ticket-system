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
        Schema::create("manager_events", function(Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email")->unique();
            $table->string("password");
            $table->string("personal_contact")->nullable;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("manager_events");
    }
};
