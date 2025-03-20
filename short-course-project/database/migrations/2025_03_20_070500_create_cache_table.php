<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCacheTable extends Migration
{
    public function up()
    {
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();  // cache key
            $table->text('value');  // cached value
            $table->integer('expiration');  // expiration timestamp
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cache');
    }
}
