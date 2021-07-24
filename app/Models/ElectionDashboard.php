<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionDashboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_name',
        'party_name',
        'obtain_votes',
        'party_symbol',
    ];
}
