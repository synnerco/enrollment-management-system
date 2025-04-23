<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->restrictOnDelete();
            $table->string('school_id');
            $table->string('position_title')->comment('Specific hierarchy of the teacher. e.g: Teacher I, Teacher II, ...');
            $table->string('school_div_office_aff')->comment('Specific DepEd division');
            $table->string('region_aff')->comment('Specific DepEd region');
            $table->string('emp_status');
            $table->string('designation')->comment('Official role of the faculty to the school');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculties');
    }
};
