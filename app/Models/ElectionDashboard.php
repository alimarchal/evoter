<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionDashboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'polling_station_no',
        'type',
        'polling_station_name',
        'area',
        'khawaja_farooq',
        'iftikhar_gillani',
        'mubarak_haider',
        'mukhtar_khan',
    ];
}
