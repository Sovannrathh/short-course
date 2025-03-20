<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('submissions', function (Blueprint $table) {
            $table->id('submission_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('assessment_id');
            $table->text('submission_text');
            $table->timestamp('submitted_at')->useCurrent();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('assessment_id')->references('assessment_id')->on('assessments')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('submissions');
    }
};