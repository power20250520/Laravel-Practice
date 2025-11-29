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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        
        // --- 1. 添加外键 (Foreign Key) ---
        // 确保 products 表可以关联到 categories 表
        $table->foreignId('category_id')
              ->constrained() // 假设关联到 'categories' 表
              ->onDelete('cascade'); // 可选：删除分类时也删除产品

        // --- 2. 添加 image 字段 ---
        $table->string('image')->nullable();
        
        // --- 原始字段 ---
        $table->string('name');
        $table->decimal('price', 8, 2);
        $table->text('description')->nullable();
        
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
