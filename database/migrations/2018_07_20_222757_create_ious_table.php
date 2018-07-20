<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ious', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lender_email');
            $table->string('borrower_email');
            $table->string('comment', 15);
            $table->double('amount',8,2);
            $table->date('created_date');
            $table->date('due_date');
            $table->boolean('paid');
            $table->date('paid_on_date');
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
        Schema::dropIfExists('ious');
    }
}
