<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_settings', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('project_id')->constrained('projects')->onDelete('cascade');
            $table->string('mail_host');
            $table->string('api_key');
            $table->string('mail_port');
            $table->string('mail_user');
            $table->string('mail_password');
            $table->string('mail_sending_address');
            $table->string('mail_sending_name');
            $table->string('test_mail_receiver')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_settings');
    }
};
