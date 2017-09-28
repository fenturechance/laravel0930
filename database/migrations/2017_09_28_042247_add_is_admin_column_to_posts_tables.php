<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsAdminColumnToPostsTables extends Migration
{

    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //can't be negative number
            $table->tinyInteger('is_admin')->default('0');
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->dropColumn('is_admin');
        });
    }
}