<?php

namespace App\Models;

use App\Models\Nivel;
use App\Models\Turma;
use App\Models\Aluno;
use App\Models\Categoria;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    protected $fillable = [
        'nome',
        'sigla',
        'total_horas',
    ];

    public function niveis() {
        return $this->hasMany(Nivel::class);
    }

    public function turma() {
        return $this->belongsTo(Turma::class);
    }

    public function aluno() {
        return $this->belongsTo(Aluno::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}
