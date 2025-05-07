<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SIGAC</title>
        @vite(['resources/css/login.css', 'resources/css/components.css', 'resources/css/reset.css'])        
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="info">
                    <h1>SIGAC</h1>
                    <p>Seu sistema de gerenciamento de atividades complementares!</p>
                    <a class="secundary-btn" href="">Registrar-se</a>
                </div>
                <div class="login-cont">
                    <form class="form-login" action="" method="post">
                        <h2>LOGIN</h2>
                        <div class="inputs">
                            <div class="primary-input">
                                <div>
                                    <input type="text" placeholder=" " name="user" id="user" >
                                    <label for="user">Usuário</label>
                                </div>
                                <p id="response-user"></p>
                            </div>
                            <div class="primary-input">
                                <div>
                                    <input type="password" placeholder=" " name="pass" id="pass">                            
                                    <label for="pass">Senha</label>
                                </div>
                                <p id="response-pass"></p>
                            </div>
                        </div>
                        <div class="sub-btn">
                            <a href="{{ url('/dashboard') }}" class="primary-btn">Entrar</a>    
                        <!-- <input class="primary-btn" type="submit" value="Entrar"> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>