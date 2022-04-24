<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveEndTimeColumnFromSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->dropColumn('end_time');
            $table->dropColumn('start_time');
            $table->timestamp('started_at')->nullable();
            $table->integer('duration')->nullable()->default(1);
        });

        Schema::table('certificates', function (Blueprint $table) {
            $table->dropColumn('end_at');
            $table->dropColumn('start_at');
            $table->timestamp('started_at')->nullable();
            $table->integer('duration')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->dropColumn('duration');
            $table->dropColumn('started_at');
            $table->timestamp('end_time')->nullable();
            $table->timestamp('start_time')->nullable();
        });

        Schema::table('certificates', function (Blueprint $table) {
            $table->dropColumn('duration');
            $table->dropColumn('started_at');
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
        });
    }
}
