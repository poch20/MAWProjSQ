<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManyToManyFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('many_to_many_forms', function (Blueprint $table) {
            $table->id();
            //$table->longText('description')->nullable();
            $table->mediumText('description')->nullable()->default('sample.pdf');
            $table->string('document_files')->nullable()->default('sample.pdf');
            $table->string('file_name')->nullable()->unique();
            $table->string('file_type')->nullable()->default('pdf');
            $table->string('file_extension')->nullable()->default('pdf');
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
        Schema::dropIfExists('many_to_many_forms');
    }
}
