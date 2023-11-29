<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'employer', 'positions_held', 'start_date', 'end_date', 'responsibilities',
    ];
}
