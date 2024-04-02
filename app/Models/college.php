<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class college extends Model
{
    use HasFactory;
    protected $fillble=[ 'college_name', 'place', 'state', 'city', 'study_mode', 'exam', 'institute_type', 'courses_id'];
}
