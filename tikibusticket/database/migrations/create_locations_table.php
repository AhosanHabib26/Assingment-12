public function up()
{
    Schema::create('locations', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->timestamps();
    });
}
