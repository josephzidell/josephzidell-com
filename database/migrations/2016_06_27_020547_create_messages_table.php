<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->timestamp('viewed_at');
            $table->string('name', 40);
            $table->string('title', 50);
            $table->string('email', 80);
            $table->text('message');
            $table->text('referer');
            $table->ipAddress('ip');
            $table->string('country', 2);
            $table->text('user_agent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('messages');
    }
}
