<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @yield('css-resources')
        <title>SIGAC</title>
    </head>
    <body>
        @yield('header')
        <div class="app-container">
            @yield('aside-links')
            <div class="content">
                <div class="cont-box">
                    @yield('cont-box')
                </div>
            </div>
        </div>
        @if (session('success'))
            <x-alert text="{{ session('success') }}"/>
        @elseif($errors->any())
            <x-alert text="Algo deu errado!"/>
            @foreach($errors->all() as $erro)
            <script>
                console.log("{{$erro}}")
            </script>
            @endforeach
        @endif
    </body>
    @yield('js-resources')
</html>