<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('installment_id')->nullable();
            $table->float('total_amount')->nullable();
            $table->enum('status', ['Active','Inactive'])->default('Active');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('year');
            $table->unsignedBigInteger('month');
            $table->date('collection_date');
            $table->float('current_collection')->default(0);
            $table->enum('collection_type', ['Fixed','Monthly'])->default('Monthly');
            $table->string('receipt_image')->nullable();
            $table->boolean('is_sent_sms_to_member')->default(false);
            $table->boolean('is_sent_sms_to_reference')->default(false);

            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->softDeletes();
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
        Schema::dropIfExists('collections');
    }
}
