@extends('template')
 
@section('conteudo')
 
    <h1 id="titulopagina">Clássicos mais Saidos...</h1>
 
    <div class="card-container">
        @foreach ($card as $cartao)
            <div class="custom-card">
                <img src="{{ $cartao['imagem'] }}" class="custom-card-img" alt="{{ $cartao['nome'] }}">
                <div class="custom-card-body">
                <h5 class="custom-card-title">{{ $cartao['nome'] }}</h5>
                <p class="custom-card-text">{{ $cartao['texto'] }}</p>
                <p class="custom-card-price"><strong>{{ $cartao['preco'] }}</strong></p>
 
              <!-- button -->
            <div class="custom-card-buttons">
              <a href="{{ url('/produtos') }}" class="btn-card">Comprar</a>
           </div>
      </div>
 </div>
        @endforeach
    </div>
   
@endsection