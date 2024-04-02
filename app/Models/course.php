<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name',
        'Admission_Process',
        'Duration',
        'Exam_Type',
        'Course_Fee',
        'list_of_course',
        'avg_salary',
        'min_salary',
        'max_salary',
        'syllabus',
        'Jobs',
        'Job_detail'
    ];
       
}
