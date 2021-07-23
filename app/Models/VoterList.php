<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoterList extends Model
{
    use HasFactory;

    protected $fillable = ['constituency_name', 'ec_no', 'moza_daha_city', 'patwar_circle_name', 'tehsil', 'district', 'constituency_area_number', 'ward_no', 'union_council', 'gender', 'name', 'father_husband_name', 'cnic', 'occupation', 'age', 'address', 'mobile_number', 'polling_station_no', 'potential_voter', 'status',];
}
