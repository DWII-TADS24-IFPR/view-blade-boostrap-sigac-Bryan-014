<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    protected $validationRules = [
        'ano' => 'required|numeric',
    ];

    protected $validationMessages = [
        'ano.required' => 'O campo ano é obigatório',
        'ano.numeric' => 'O campo ano deve ser numerico',
    ];

    public function index()
    {
        $turmas = Turma::all();
        return view('turmas.index')->with('turmas', $turmas);
    }

    public function create()
    {
        return view('turmas.create');
    }
    
    public function store(Request $request)
    {
        $request->validate($this->validationRules, $this->validationMessages);

        Turma::create($request->all());
        
        return redirect()->route('turmas.index')->with('success', 'Turma cadastrado com sucesso!');
    }
    
    public function show(string $id)
    {
        $turma = turma::find($id);
        if (isset($turma)) {
            return view('turmas.show')->with('turma', $turma);
        }
        return view('turmas.index')->with('danger', 'Turma não encontrado');
    }
    
    public function edit(string $id)
    {
        $turma = turma::find($id);
        if (isset($turma)) {
            return view('turmas.edit')->with('turma', $turma);                    
        }
        return view('turmas.index')->with('danger', 'Turma não encontrado');

    }
    
    public function update(Request $request)
    {
        $turma = turma::find($request->id);
        
        if (isset($turma)) {
            $request->validate($this->validationRules, $this->validationMessages);

            $turma->ano = $request->ano;

            $turma->save();

            return redirect()->route('turmas.index')->with('success', 'Turma atualizada com sucesso!');
        }
        return view('turmas.index')->with('danger', 'Turma não encontrado');
    }
    
    public function destroy(string $id)
    {
        $turma = turma::find($id);
        
        if (isset($turma)) {
            $turma->delete();
            return redirect()->route('turmas.index');
        }
        
        return view('turmas.index')->with('danger', 'Turma não encontrado');
    }
}
