<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         $index = explode(',', env('STATES_VALUE'));
         $p = explode(',', env('PRIORITIES_VALUE'));

        Schema::create('notes', function (Blueprint $table) use ($index,$p) {
            $table->id();
            $table->text('content');
            $table->string('color')->default('#222222');
            $table->enum('state',$index);
            $table->timestamp('limited_at')->nullable();
            $table->enum('priority',$p);
            $table->string('file')->nullable();
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
        Schema::dropIfExists('notes');
    }
}
