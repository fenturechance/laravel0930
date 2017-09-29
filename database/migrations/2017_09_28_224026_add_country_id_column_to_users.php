<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCountryIdColumnToUsers extends Migration
{
    //檔案：database/migrations/日期_編號_add_country_id_column_to_users.php
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('country_id');
        });
    }
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('country_id');
        });
    }
}
