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
        Schema::create('proficiency_forms', function (Blueprint $table) {
            $table->id();
            $table->date('date_of_notification');
            $table->string('person_notified');
            $table->dateTime('date_time_scheduled');
            $table->string('location_check_pilot');
            $table->string('aircraft');
            $table->string('position');
            $table->string('flight_operations');
            $table->dateTime('month_due');
            $table->string('business_name');
            $table->string('certificate');
            $table->string('telephone');
            $table->dateTime('date');
            $table->string('signature_company');
            $table->string('printed_name_title_of_company');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proficiency_forms');
    }
};
