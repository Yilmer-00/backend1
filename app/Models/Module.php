<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'nombre',
    ];

    public function teacher()
    {
        return $this->belongsToMany(Teacher::class, 'module_teacher', 'module_id','teacher_id');
    }

        public function student()
    {
        return $this->belongsToMany(Teacher::class, 'module_teacher', 'module_id', 'student_id');
    }
}
