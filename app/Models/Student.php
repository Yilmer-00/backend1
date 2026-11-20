<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'imagen_url',
        'imagen_public_id'
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date',
    ];

    //$s1 = \App\Models\Student::create(['nombre' => 'Carlos','apellido' => 'Ruiz','fecha_nacimiento' => '2005-05-10','expediente' => 'EXP001','imagen_url' => 'https://ejemplo.com/foto1.jpg','imagen_public_id' => 'foto1']);

    public function module()
    {
        return $this->belongsToMany(Module::class, 'module_student', 'student_id', 'module_id');
    }

        public function delegado()
    {
        return $this->belongsTo(Student::class, 'delegado_id');
    }

    public function estudiantesDelegados()
    {
        return $this->hasMany(Student::class, 'delegado_id');
    }
}
