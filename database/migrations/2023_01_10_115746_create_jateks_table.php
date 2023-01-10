<?php

use App\Models\Jatek;
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
        Schema::create('jateks', function (Blueprint $table) {
            $table->id("jatek_id");
            $table->string("neve", 50);
            $table->string("platform", 30);
            $table->integer("darabszam");
            $table->bigInteger("ar");
            $table->timestamps();
        });

        Jatek::create(['neve' => 'Jojo\'s Bizarre Adventure: All Star Battle R', 'platform' => 'Nintendo Switch', 'darabszam' => 10, 'ar' => 20000]);
        Jatek::create(['neve' => 'Crash Bandicoot 4: It\'s About Time', 'platform' => 'Nintendo Switch', 'darabszam' => 12, 'ar' => 16000]);
        Jatek::create(['neve' => 'Rock of Ages', 'platform' => 'PC', 'darabszam' => 21, 'ar' => 6000]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jateks');
    }
};
