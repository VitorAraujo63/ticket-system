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
        Schema::create("events", function(Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description")->nullable();
            $table->decimal("price");
            $table->string("contact");
            $table->string("address");
            $table->integer("stock_ticket");
            $table->foreignId("manager_event_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("events");
    }
};
