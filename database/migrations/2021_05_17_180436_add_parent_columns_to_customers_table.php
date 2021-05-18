<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParentColumnsToCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('parent')->nullable();
            $table->string('child1')->nullable();
            $table->string('child2')->nullable();
            $table->string('child3')->nullable();
            $table->string('child4')->nullable();
            $table->string('child5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('parent');
            $table->dropColumn('child1');
            $table->downColumn('child2');
            $table->dropColumn('child3');
            $table->dropColumn('child4');
            $table->dropColumn('child5');
        });
    }
}
