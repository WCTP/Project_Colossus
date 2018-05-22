<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('username')->default('name');
            $table->string('privilege')->default('player');
            $table->tinyInteger('hp')->default(0);
            $table->tinyInteger('max_hp')->default(0);
            $table->tinyInteger('mp')->default(0);
            $table->tinyInteger('max_mp')->default(0);
            $table->tinyInteger('ap')->default(0);
            $table->tinyInteger('mov')->default(0);
            $table->tinyInteger('str')->default(0);
            $table->tinyInteger('def')->default(0);
            $table->tinyInteger('mag')->default(0);
            $table->tinyInteger('res')->default(0);
            $table->tinyInteger('eva')->default(0);
            $table->tinyInteger('skl')->default(0);
            $table->tinyInteger('vit')->default(0);
            $table->tinyInteger('dex')->default(0);
            $table->tinyInteger('con')->default(0);
            $table->tinyInteger('int')->default(0);
            $table->tinyInteger('wis')->default(0);
            $table->tinyInteger('cha')->default(0);
            $table->tinyInteger('sphere_ess')->default(0);
            $table->tinyInteger('sphere_spd')->default(0);
            $table->tinyInteger('sphere_atk')->default(0);
            $table->tinyInteger('sphere_def')->default(0);
            $table->tinyInteger('sphere_magic')->default(0);
            $table->tinyInteger('sphere_skill')->default(0);
            $table->tinyInteger('sphere_lvl_1')->default(0);
            $table->tinyInteger('sphere_lvl_2')->default(0);
            $table->tinyInteger('sphere_lvl_3')->default(0);
            $table->tinyInteger('sphere_lvl_4')->default(0);
            $table->tinyInteger('sphere_vit')->default(0);
            $table->tinyInteger('sphere_dex')->default(0);
            $table->tinyInteger('sphere_con')->default(0);
            $table->tinyInteger('sphere_int')->default(0);
            $table->tinyInteger('sphere_wis')->default(0);
            $table->tinyInteger('sphere_cha')->default(0);
            $table->text('inventory')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
