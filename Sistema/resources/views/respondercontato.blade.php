@extends('template')

@section('titulo', 'Responder Contato')

@section('conteudo')
<div style="max-width: 600px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 8px;">
    <h2>Responder Contato</h2>
    <p><strong>Nome:</strong> {{ $contato->nome }}</p>
    <p><strong>E-mail:</strong> {{ $contato->email }}</p>
    <p><strong>Assunto:</strong> {{ $contato->assunto }}</p>
    <p><strong>Mensagem:</strong> {{ $contato->mensagem }}</p>

    <hr>
    <form action="mailto:{{ $contato->email }}" method="post" enctype="text/plain">
        <div>
            <label for="resposta">Sua Resposta:</label>
            <textarea name="resposta" id="resposta" rows="5" required style="width: 100%;"></textarea>
        </div>
        <br>
        <button type="submit" style="background: #4caf50; color: white; padding: 10px 15px; border: none; border-radius: 4px;">
            Enviar Resposta por Email
        </button>
    </form>
</div>
@endsection
