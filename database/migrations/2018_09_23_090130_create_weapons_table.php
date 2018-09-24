<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_descriptions', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('title');
            $table->text('description');
            
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('dice_types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('value')->unsigned();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('damage_types', function (Blueprint $table) {
            $table->increments('id');

            $table->string('code');
            $table->string('name');
            $table->boolean('is_energy')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('ammo_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
 
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('weapon_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('weapon_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('weapons', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name');
            $table->integer('level')->unsigned()->default(0);
            $table->integer('price')->unsigned()->default(0);

            $table->integer('item_description_id')->unsigned()->nullable();
            $table->foreign('item_description_id')->references('id')->on('item_descriptions');

            $table->integer('dice_amount')->unsigned()->nullable();
            $table->integer('dice_type_id')->unsigned()->nullable();
            $table->foreign('dice_type_id')->references('id')->on('dice_types');

            $table->integer('damage_type_id')->unsigned()->nullable();
            $table->foreign('damage_type_id')->references('id')->on('damage_types');

            $table->integer('ammo_capacity')->unsigned()->nullable();
            $table->integer('ammo_type_id')->unsigned()->nullable();
            $table->foreign('ammo_type_id')->references('id')->on('ammo_types');
            $table->integer('usage')->unsigned()->nullable();

            $table->integer('range')->unsigned()->nullable();

            $table->integer('weapon_type_id')->unsigned();
            $table->foreign('weapon_type_id')->references('id')->on('weapon_types');
                
            $table->integer('weapon_category_id')->unsigned();
            $table->foreign('weapon_category_id')->references('id')->on('weapon_categories');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_descriptions');
        Schema::dropIfExists('dice_types');
        Schema::dropIfExists('damage_types');
        Schema::dropIfExists('ammo_types');
        Schema::dropIfExists('weapon_types');
        Schema::dropIfExists('weapon_categories');
        Schema::dropIfExists('weapons');
    }
}
