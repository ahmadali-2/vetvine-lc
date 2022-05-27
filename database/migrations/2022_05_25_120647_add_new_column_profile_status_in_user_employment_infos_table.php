<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
<<<<<<<< HEAD:database/migrations/2022_05_26_170310_update_column_type_make_foreign_key_in_users_table.php
class UpdateColumnTypeMakeForeignKeyInUsersTable extends Migration
========
class AddNewColumnProfileStatusInUserEmploymentInfosTable extends Migration
>>>>>>>> 8a459ae30e29b780cb8c65f68a56b65bec5fe6c9:database/migrations/2022_05_25_120647_add_new_column_profile_status_in_user_employment_infos_table.php
=======
class AddNewColumnProfileStatusInUserEmploymentInfosTable extends Migration
>>>>>>> 74f3c4a7ebb63c39d2199e6ad70d6f804345147d
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
<<<<<<<< HEAD:database/migrations/2022_05_26_170310_update_column_type_make_foreign_key_in_users_table.php
        Schema::table('users', function (Blueprint $table) {
            $table->unSignedBigInteger('type')->change();
            $table->foreign('type')->references('id')->on('member_types');
========
=======
>>>>>>> 74f3c4a7ebb63c39d2199e6ad70d6f804345147d
        Schema::table('user_employment_infos', function (Blueprint $table) {
            //

            $table->string('profile_status')->nullable();
<<<<<<< HEAD
>>>>>>>> 8a459ae30e29b780cb8c65f68a56b65bec5fe6c9:database/migrations/2022_05_25_120647_add_new_column_profile_status_in_user_employment_infos_table.php
=======
>>>>>>> 74f3c4a7ebb63c39d2199e6ad70d6f804345147d
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
<<<<<<<< HEAD:database/migrations/2022_05_26_170310_update_column_type_make_foreign_key_in_users_table.php
        Schema::table('users', function (Blueprint $table) {
========
        Schema::table('user_employment_infos', function (Blueprint $table) {
>>>>>>>> 8a459ae30e29b780cb8c65f68a56b65bec5fe6c9:database/migrations/2022_05_25_120647_add_new_column_profile_status_in_user_employment_infos_table.php
=======
        Schema::table('user_employment_infos', function (Blueprint $table) {
>>>>>>> 74f3c4a7ebb63c39d2199e6ad70d6f804345147d
            //
        });
    }
}
