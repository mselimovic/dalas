<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 120);
            $table->string('last_name', 120);
            $table->string('email');
            $table->string('phone', 30);
            // If you want SQLite-friendly schema, use string instead of enum:
            // $table->string('customer_type', 20);
            $table->enum('customer_type', ['Privatkunde','Gewerbekunde']);
            $table->text('message');
            $table->boolean('gdpr_accepted')->default(false);
            $table->timestamps();

            $table->index('email');
            $table->index('customer_type');
        });
    }
    public function down(): void {
        Schema::dropIfExists('questions');
    }
};

