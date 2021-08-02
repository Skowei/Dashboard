<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashboardRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboard_routes', function (Blueprint $table) {
            $table->id();
            $table->string('icon', '32')->nullable();
            $table->string('name', '32');
            $table->string('route','64')->nullable();
            $table->foreignId('parent_id')->nullable()->references('id')->on('dashboard_routes')->onDelete('cascade');
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
        Schema::dropIfExists('dashboard_routes');
    }
}
