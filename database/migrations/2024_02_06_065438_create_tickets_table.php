<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('priority_id');
            $table->foreignId('user_id');
            $table->foreignId('user_assign_id')->nullable();
            $table->string('title');
            $table->longText('description');
            $table->longText('image');
            $table->enum('status',[0,1])->default(1)->comment('0 for close 1 for  open');
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
        Schema::dropIfExists('tickets');
    }
}
