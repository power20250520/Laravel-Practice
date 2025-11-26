public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->string('image')->nullable()->after('price');
    });
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->dropColumn('image');
    });
}
