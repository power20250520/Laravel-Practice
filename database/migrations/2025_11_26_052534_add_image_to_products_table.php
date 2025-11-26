<?php // <-- 确保有这个 PHP 起始标签

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// <-- 确保有这个类定义，并且类名与你的文件名相符 (AddImageToProductsTable)
class AddImageToProductsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // 你的 up() 方法代码
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('image')->nullable(); // 你这里没有 after('price')，也无所谓，功能一样
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // 你的 down() 方法代码
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
} // <-- 确保有这个类闭合括号