<?php

use App\Models\Club;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->date("establishment");
            $table->string("location");
            $table->integer("max_number");
            $table->timestamps();
        });

        Club::create(["establishment" => '2020-02-20', "location" => 'Budapest', "max_number" => 50]);
        Club::create(["establishment" => '2000-01-01', "location" => 'Szeged', "max_number" => 150]);
        Club::create(["establishment" => '1990-06-13', "location" => 'Hatvan', "max_number" => 250]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubs');
    }
};
