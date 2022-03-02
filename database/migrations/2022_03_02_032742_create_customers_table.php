<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // customize our customer table 
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id'); // change default field
            $table->string('name',50);
            $table->string('email',50);
            $table->enum('gender',["M","F","O"])->nullable();  // 
            $table->text('address');
            $table->date('dob');
            $table->string('password');
            $table->boolean("status")->default(1);
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
        Schema::dropIfExists('customers');
    }
};
