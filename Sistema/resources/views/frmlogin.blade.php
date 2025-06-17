@extends('template')

@section('titulo','Login')

@section('conteudo')

<div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f4;">

    <form action="/logar" method="POST" enctype="multipart/form-data" style="width: 400px; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">

        <h1 id="titulo">Login</h1>

        @csrf

        <div style="margin-bottom: 15px;">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" class="form-control" required>
        </div>

        <div style="margin-bottom: 15px;">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" required>
        </div>

        <div style="margin-bottom: 20px;">
            <button type="submit" class="btn-enviar">Login</button>
        </div>

        <p style="text-align: center;">Não tem uma conta?
            <a href="/frmusuario">Cadastre-se</a>
        </p>
    </form>
</div>

@endsection
