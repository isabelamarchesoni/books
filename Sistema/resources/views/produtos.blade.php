@extends('template')
@section('titulo', 'Produtos')
 
@section('conteudo')
 
<div style="width: 90%; margin: 0 auto; padding: 20px; box-sizing: border-box; cursor:pointer; ">
    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        @foreach ($prods as $card)
            <div style="width: 250px; background-color: white; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.1); ">
                <div class = custom-card style="padding: 15px; hover: transform:scale(1.09); ">
                    <img src="{{ asset('storage/' .$card ['imagem']) }}" style="width: 100%; height: auto;">
                    <h3 style="margin: 10px 0;">{{ $card['nome'] }}</h3>
                    <p style="margin: 0 0 10px;">R$ {{ number_format($card['preco'], 2, ',', '.') }}</p>
                    <p style="font-weight: bold; margin: 0 0 10px;">{{ $card['quantidade'] }} disponíveis</p>
                    <a href="#" class="btn btn-primary" style="color: white;">Comprar</a>
                </div>

                 @if($card->image_path)
                        <img src="{{ asset('storage/' . $card->image_path) }}"
                             class="card-img-top object-fit-cover"
                             style="height: 200px; object-fit: cover;"
                             alt="{{ $produto->title }}">
                    @endif
            </div>
        @endforeach
    </div>
</div>
 
@endsection
 
 
