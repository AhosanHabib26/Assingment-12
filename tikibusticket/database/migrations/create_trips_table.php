public function up()
{
    Schema::create('trips', function (Blueprint $table) {
        $table->id();
        $table->date('date');
        $table->unsignedBigInteger('location_id');
        $table->timestamps();

        $table->foreign('location_id')->references('id')->on('locations');
    });
}
