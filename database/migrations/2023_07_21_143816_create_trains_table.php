<?php

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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};


class CreateTrainsTable extends Migration
{
    public function up()
    {
        Schema::create ('trains', function (Blueprint $table) {
            $table -> id ();
            $table -> string ('azienda');
            $table -> string ('stazione_partenza');
            $table -> string ('stazione_arrivo');
            $table -> dateTime ('orario_partenza');
            $table -> dateTime ('orario_arrivo');
            $table -> string ('codice_treno');
            $table -> integer ('numero_carrozze');
            $table -> boolean ('in_orario') -> default (true);
            $table -> boolean ('cancellato') -> default (false);
            $table -> timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
