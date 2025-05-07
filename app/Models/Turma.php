<?php

namespace App\Models;

use App\Models\Curso;
use App\Models\Aluno;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turmas';

    protected $fillable = [
        'ano',
    ];
    
    public function cursos() {
        return $this->hasMany(Curso::class);
    }
    
    public function aluno() {
        return $this->belongsTo(Aluno::class);
    }
}
