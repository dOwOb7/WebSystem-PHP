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
        if (!Schema::hasColumn('shifts', 'name')) {
            Schema::table('shifts', function (Blueprint $table) {
                $table->string('name')->nullable();
            });
        }
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('shifts', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
};
