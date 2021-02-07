<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandModelVersionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        DB::table('brand')->insert([
            ['name' => 'IPhone'],
            ['name' => 'Samsung'],
            ['name' => 'Nokia'],
        ]);
        Schema::create('model', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id');
            $table->string('name');
            $table->timestamps();
        });
        DB::table('model')->insert([
            ['name' => 'six','brand_id' => '1'],
            ['name' => 'Galaxy','brand_id' => '2'],
            ['name' => 'Torche','brand_id' => '3'],
        ]);
        Schema::create('version', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('model_id');
            $table->string('name');
            $table->string('hash')->unique();
            $table->string('link');
            $table->timestamps();
        });
        DB::table('version')->insert([
            ['name' => 's','model_id' => '1','hash' => 'jkbvrzvlkjrnrlv','link' => 'https://google.com'],
            ['name' => '6s edge','model_id' => '2','hash' => 'jkbvrzvkjrnrlv','link' => 'https://google.com'],
            ['name' => '3800','model_id' => '3','hash' => 'jkbvrzvlknrlv','link' => 'https://google.com'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('brand');
        Schema::drop('model');
        Schema::drop('version');
    }
}
