public function up()
{
    Schema::create('seat_allocations', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('trip_id');
        $table->unsignedInteger('seat_number');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('trip_id')->references('id')->on('trips');
    });
}
