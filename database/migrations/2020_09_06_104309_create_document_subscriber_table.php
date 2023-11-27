<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentSubscriberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_subscriber', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id')->references('id')->on('documents')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('subscriber_id')->references('id')->on('subscribers')->onDelete('cascade')->onUpdate('cascade');
            $table->date('to');
            $table->string('comment');
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
        Schema::dropIfExists('document_subscriber');
    }
}
