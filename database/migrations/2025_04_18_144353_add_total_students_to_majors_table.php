<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('majors', function (Blueprint $table) {
            $table->integer('total_students')->default(0)->after('description');
        });
    }
    
    public function down()
    {
        Schema::table('majors', function (Blueprint $table) {
            $table->dropColumn('total_students');
        });
    }
    
};
