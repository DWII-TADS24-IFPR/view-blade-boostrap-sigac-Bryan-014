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
    <x-bread-crumb page="Cursos" subPage="Editar" link="cursos.index"/>
    <form action="{{ Route('cursos.update') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$curso->id}}">
        <div class="mt-2 mb-3">
            <div class="wrapper-inputs">
                <div class="primary-input">
                    <div>
                        <input type="text" placeholder=" " name="nome" id="nome" value="{{$curso->nome}}">
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
                        <input type="text" placeholder=" " name="sigla" id="sigla" value="{{$curso->sigla}}">
                        <label for="sigla">Sigla</label>
                    </div>
                    <p id="response-sigla">
                        @error('sigla')                        
                            {{$message}}
                        @enderror
                    </p>
                </div>
            </div>
            <div class="wrapper-inputs">
                <div class="primary-input">
                    <div>
                        <input type="text" placeholder=" " name="total_horas" id="total_horas" value="{{$curso->total_horas}}">
                        <label for="total_horas">total de Horas</label>
                    </div>
                    <p id="response-total_horas">
                        @error('total_horas')                        
                            {{$message}}
                        @enderror
                    </p>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <input class="primary-btn" type="submit" value="Editar">
            </div>
        </div>
    </form>
@endsection

@section('js-resources')
    @vite(['resources/js/app.js', 'resources/js/home.js'])
@endsection