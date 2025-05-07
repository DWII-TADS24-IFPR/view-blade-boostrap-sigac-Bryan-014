<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    protected $validationRules = [
        'nome' => 'required|min:3',
        'email' => 'required|email',
        'cpf' => 'required'
    ];

    protected $validationMessages = [
        'nome.required' => 'O campo nome é obigatório',
        'nome.min' => 'O campo nome deve conter ao menos 3 caracteres',
        'email.required' => 'O campo email é obigatório',
        'email.email' => 'O campo email deve conter um email válido',
        'cpf.required' => 'O campo cpf é obrigatório'
    ];

    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index')->with('alunos', $alunos);
    }

    public function create()
    {
        return view('alunos.create');
    }
    
    public function store(Request $request)
    {
        $request->validate($this->validationRules, $this->validationMessages);

        $nome = $request->nome;
        $email = $request->email;
        $cpf = $request->cpf;
        $senha = $request->cpf;

        $aluno = new Aluno();
        $aluno->nome = $nome;
        $aluno->email = $email;
        $aluno->cpf = $cpf;
        $aluno->senha = encrypt($senha);
        
        $aluno->save();
        
        return redirect()->route('alunos.index')->with('success', 'Aluno cadastrado com sucesso!');
    }
    
    public function show(string $id)
    {
        $aluno = Aluno::find($id);
        if (isset($aluno)) {
            return view('alunos.show')->with('aluno', $aluno);
        }
        return view('alunos.index')->with('danger', 'Aluno não encontrado');
    }
    
    public function edit(string $id)
    {
        $aluno = Aluno::find($id);
        if (isset($aluno)) {
            return view('alunos.edit')->with('aluno', $aluno);                    
        }
        return view('alunos.index')->with('danger', 'Aluno não encontrado');

    }
    
    public function update(Request $request)
    {
        
        $aluno = Aluno::find($request->id);
        
        if (isset($aluno)) {
            $request->validate($this->validationRules, $this->validationMessages);

            $aluno->nome = $request->nome;
            $aluno->email = $request->email;
            $aluno->cpf = $request->cpf;

            $aluno->save();

            return redirect()->route('alunos.index')->with('success', 'Aluno editado com sucesso!');
        }
        return view('alunos.index')->with('danger', 'Aluno não encontrado');
    }
    
    public function destroy(string $id)
    {
        $aluno = Aluno::find($id);
        
        if (isset($aluno)) {
            $aluno->delete();
            return redirect()->route('alunos.index');
        }
        
        return view('alunos.index')->with('danger', 'Aluno não encontrado');
    }
}
