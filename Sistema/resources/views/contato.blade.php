
@extends('template')
@section('titulo', 'Contato')
 
@section('conteudo')

   
     
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f4;">
             
        <form action="/contato" method="POST" style="width: 500px; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
        
             <h1 id = titulo >Contato</h1>   
            @csrf
            <div style="margin-bottom: 15px;">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
 
            <div style="margin-bottom: 15px;">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
 
            <div style="margin-bottom: 15px;">
                <label for="assunto">Assunto</label>
                <input type="text" name="assunto" id="assunto" class="form-control" required>
            </div>
 
            <div style="margin-bottom: 15px;">
                <label for="mensagem">Mensagem</label>
                <textarea name="mensagem" id="mensagem" rows="4" class="form-control" required></textarea>
            </div>
 
            <button type="submit" class="btn-enviar">Enviar</button>
        </form>
    </div>
@endsection