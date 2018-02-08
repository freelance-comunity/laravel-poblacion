<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePopulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('populations', function(Blueprint $table) {
                $table->increments('id');
                $table->string('month')->nullable();
                $table->date('date')->nullable();
                $table->string('status')->nullable();
                $table->string('campus')->nullable();
                $table->string('enrollment')->nullable();
                $table->string('career')->nullable();
                $table->string('name')->nullable();
                $table->string('system')->nullable();
                $table->string('sex')->nullable();
                $table->string('turn')->nullable();
                $table->string('semi_day')->nullable();
                $table->string('scholarship')->nullable();
                $table->string('foreign')->nullable();
                $table->string('agreement')->nullable();
                $table->string('average')->nullable();
                $table->string('five_or_more')->nullable();
                $table->string('quarter')->nullable();
                $table->string('year_income')->nullable();
                $table->string('year_discharge')->nullable();
                $table->text('observation_of_changes')->nullable();
                $table->date('modification_date')->nullable();
                $table->string('low')->nullable();
                $table->string('administrative')->nullable();
                $table->string('temporary')->nullable();
                $table->string('definitive')->nullable();
                $table->date('low_date')->nullable();
                $table->text('observations_low')->nullable();
                $table->string('intern_letter')->nullable();
                $table->string('certificate')->nullable();
                $table->string('title')->nullable();

                $table->timestamps();
                $table->softDeletes();
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('populations');
    }

}
