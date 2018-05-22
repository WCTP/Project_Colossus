<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSphereGridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sphere_grids', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('x_pos');
            $table->tinyInteger('y_pos');
            $table->tinyInteger('current_user_id_1')->nullable();
            $table->tinyInteger('current_user_id_2')->nullable();
            $table->tinyInteger('connected_sphere_id_1')->nullable();
            $table->tinyInteger('connected_sphere_id_2')->nullable();
            $table->tinyInteger('connected_sphere_id_3')->nullable();
            $table->tinyInteger('connected_sphere_id_4')->nullable();
            $table->string('sphere_type');
            $table->tinyInteger('sphere_type_value')->nullable();
            $table->string('user_id_activated')->nullable();
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
        Schema::dropIfExists('sphere_grids');
    }
}
