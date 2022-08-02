<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('membertype_id');
            $table->foreign('membertype_id')->references('id')->on('member_types')->onDelete('cascade');
            $table->enum('view_ads', ['0', '1'])->default(0);
            $table->enum('comments', ['0', '1'])->default(0);
            $table->enum('licensure', ['0', '1'])->default(0);
            $table->enum('dashboard', ['0', '1'])->default(0);
            $table->enum('ads', ['0', '1'])->default(0);
            $table->enum('webinars', ['0', '1'])->default(0);
            $table->enum('forums', ['0', '1'])->default(0);
            $table->enum('videos', ['0', '1'])->default(0);
            $table->enum('manage', ['0', '1'])->default(0);
            $table->enum('settings', ['0', '1'])->default(0);
            $table->enum('membership_plans', ['0', '1'])->default(0);
            $table->enum('member_level', ['0', '1'])->default(0);
            $table->enum('manage_users', ['0', '1'])->default(0);
            $table->enum('mail_to_users', ['0', '1'])->default(0);
            $table->enum('guest_registration_fee', ['0', '1'])->default(0);
            $table->enum('static_pages', ['0', '1'])->default(0);
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
        Schema::dropIfExists('member_permissions');
    }
}
