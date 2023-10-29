<?php

use App\Models\Category;
use App\Models\Priority;
use App\Models\User;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_done')->default(false);
            $table->string('title')->nullable(false);
            $table->string('description');
            $table->dateTime('due_date');
            $table->timestamps();
            $table->foreignIdFor(Category::class)->references('id')->on('categories')->onDelete('CASCADE');
            $table->foreignIdFor(Priority::class)->references('id')->on('priorities')->onDelete('CASCADE');
            $table->foreignIdFor(User::class)->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeignIdFor(Category::class);
            $table->dropForeignIdFor(Priority::class);
            $table->dropForeignIdFor(User::class);
        });
        Schema::dropIfExists('tasks');
    }
};
