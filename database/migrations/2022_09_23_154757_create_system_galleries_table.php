<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_galleries', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->foreignId('system_id')->nullable()->constrained('systems')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('system_category_id')->nullable()->constrained('system_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('system_type_id')->nullable()->constrained('system_types')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('system_galleries');
    }
}
