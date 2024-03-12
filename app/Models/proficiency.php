<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proficiency extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_of_notification',
        'person_notified',
        'date_time_scheduled',
        'location_check_pilot',
        'aircraft',
        'position',
        'flight_operations',
        'month_due',
        'business_name',
        'certificate',
        'telephone',
        'date',
        'signature_company',
        'printed_name_title_of_company',
    ];
}
