@extends('template')

@section('titulo', 'Add Usuario')
 
@section('conteudo')
     
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f4;">
             
             <form action="/addusuario" method="POST" enctype= "multipart/form-data" style="width: 500px; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
             
                 <h1 id = titulo >Cadastro</h1>  
     
                 @csrf
                 <div style="margin-bottom: 15px;">
                 <label for="nome">Nome</label>
                 <input type="text" name="fnome" id="fnome" class="form-control" required>
                 </div>
      
                 <div style="margin-bottom: 15px;">
                 <label for="email">E-mail</label>
                 <input type="email" name="femail" id="femail" class="form-control" required>
                 </div>
      
                 <div style="margin-bottom: 15px;">
                 <label for="senha">Senha</label>
                 <input type="password" name="fsenha" id="fsenha" class="form-control" required>
                 </div>
      
                 <div style="margin-bottom: 15px;">
                 <input type="submit"  class="btn-enviar" value = "Cadastrar">
                </div>
             </form>
         </div>
@endsection