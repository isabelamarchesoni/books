@extends('template')

@section('titulo', 'AddProduto')
 
@section('conteudo')
     
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f4;">
             
        <form action="/addproduto" method="POST" enctype= "multipart/form-data" style="width: 500px; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
        
            <h1 id = titulo >Produto</h1>  

            @csrf
            <div style="margin-bottom: 15px;">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
 
            <div style="margin-bottom: 15px;">
                <label for="preco">Preco</label>
                <input type="number" name="preco" id="preco" class="form-control" required>
            </div>
 
            <div style="margin-bottom: 15px;">
                <label for="assunto">Quantidade</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" required>
            </div>
 
            <div style="margin-bottom: 15px;">
                <label for="img">imagem</label>
                <input type="file" id="imagem" name="imagem" class="form-control" classaccept="image/*" required>
            </div>
            <input type="submit"  class="btn-enviar" value = "Cadastrar">
            
        </form>
    </div>
@endsection