@extends('template')

@section('titulo', 'Lista de Contatos')

@section('conteudo')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: white;
    }

    th {
        background-color:#201f81;
        color: white;
        padding: 10px;
        text-align: left;
    }

    td {
        padding: 10px;
        text-align: left;
        vertical-align: middle;
    }

      .btn-responder {
        background-color:#201f81;
        color: white;
        border: none;
        padding: 5px 10px;
        text-decoration: none;
        border-radius: 4px;
    }

    .btn-excluir {
        background-color:rgb(224, 21, 6);
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        cursor: pointer;
    }
    .btn-responder:hover {
            background-color:#413fbb;
            color: white;
        }

    .btn-excluir:hover {
            background-color:rgb(235, 70, 65);
            color: white;
        }
    .container {
        padding: 20px;
    }

    @media screen and (max-width: 768px) {
    table {
        font-size: 14px;
    }

    th, td {
        padding: 8px;
    }

    .btn-responder,
    .btn-excluir {
        padding: 4px 8px;
        font-size: 13px;
    }
}
</style>

<div class="container">
    <h2>Mensagens Recebidas</h2>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Assunto</th>
                <th>Mensagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contatos as $contato)
            <tr>
                <td>{{ $contato->nome }}</td>
                <td>{{ $contato->email }}</td>
                <td>{{ $contato->assunto }}</td>
                <td>{{ $contato->mensagem }}</td>
                <td>
                    <a href="/respondercontato/{{ $contato->id }}" class="btn btn-responder">Responder</a>
                    <form action="/excluircontato/{{ $contato->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Excluir" class="btn btn-excluir">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
