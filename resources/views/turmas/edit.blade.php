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
    <x-bread-crumb page="Turmas" subPage="Editar" link="turmas.index"/>
    <form action="{{ Route('turmas.update') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$turma->id}}">
        <div class="mb-3">
            <div class="primary-input">
                <div>
                    <input type="text" placeholder=" " name="ano" id="ano" value="{{$turma->ano}}">
                    <label for="ano">Ano</label>
                </div>
                <p id="response-ano">
                    @error('ano')                        
                        {{$message}}
                    @enderror
                </p>
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