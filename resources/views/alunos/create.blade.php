@extends('layouts.app')

@section('css-resources')
    @vite(['resources/css/reset.css', 'resources/css/components.css', 'resources/css/header.css', 'resources/css/table.css'])
@endsection

@section('header')
    @include('layouts.navbar')   
@endsection

@section('aside-links')
    @include('layouts.aside')   
@endsection

@section('cont-box')
    <x-bread-crumb page="Alunos" subPage="Cadastrar" link="alunos.index"/>
    <form action="{{ Route('alunos.store') }}" method="post">
        @csrf
        <div class="mt-2 mb-3">
            <div class="wrapper-inputs">
                <div class="primary-input">
                    <div>
                        <input type="text" placeholder=" " name="nome" id="nome" value="{{old('nome')}}">
                        <label for="nome">Nome</label>
                    </div>
                    <p id="response-nome">
                        @error('nome')                        
                            {{$message}}
                        @enderror
                    </p>
                </div>
                <div class="primary-input">
                    <div>
                        <input type="text" placeholder=" " name="cpf" id="cpf" value="{{old('cpf')}}">
                        <label for="cpf">CPF</label>
                    </div>
                    <p id="response-cpf">
                        @error('cpf')                        
                            {{$message}}
                        @enderror
                    </p>
                </div>
            </div>
            <div>
                <div class="primary-input">
                    <div>
                        <input type="text" placeholder=" " name="email" id="email" value="{{old('email')}}">
                        <label for="email">Email</label>
                    </div>
                    <p id="response-email">
                        @error('email')                        
                            {{$message}}
                        @enderror
                    </p>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <input class="primary-btn" type="submit" value="Cadastrar">
            </div>
        </div>
    </form>
@endsection

@section('js-resources')
    @vite(['resources/js/app.js', 'resources/js/home.js'])
@endsection