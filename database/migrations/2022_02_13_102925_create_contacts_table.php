<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('msg');
            $table->enum('trash',['0','1'])->default('0')->comment="0=not trashed,1=trashed";

            $table->timestamps();
        });
    }

    /**
     *  
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
