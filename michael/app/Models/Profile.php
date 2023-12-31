<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name', 'date_of_birth', 'nationality', 'education',
        'membership_associations', 'other_training', 'countries_worked', 'languages',
    ];
}
