@extends('template')

@section('titulo', 'Edit Produto')
 
@section('conteudo')
     
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f4;">
             
    <form action="/atualizarproduto/{{$produto->id}}" method="POST" enctype="multipart/form-data" style="width: 500px; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
    
        <h1 id="titulo">Editar Produto</h1>  

        @csrf
        @method('put')

        <div style="margin-bottom: 15px;">
            <label for="fnome">Nome</label>
            <input type="text" name="fnome" id="fnome" class="form-control" required value="{{ $produto->nome }}">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="fpreco">Preço</label>
            <input type="number" step="0.01" name="fpreco" id="fpreco" class="form-control" required value="{{ $produto->preco }}">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="fquantidade">Quantidade</label>
            <input type="number" name="fquantidade" id="fquantidade" class="form-control" required value="{{ $produto->quantidade }}">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="fimagem">Imagem</label>
            <input type="file" name="fimagem" id="fimagem" class="form-control">
            @if ($produto->imagem)
                <p>Imagem atual: {{ $produto->imagem }}</p>
            @endif
        </div>

        <div style="margin-bottom: 15px;">
            <input type="submit" class="btn-enviar" value="Alterar">
        </div>
         
    </form>
</div>
@endsection
