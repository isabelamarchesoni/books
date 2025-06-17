@extends('template')

@section('titulo', 'Lista de Produtos')

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

    img {
        width: 50px;
        height: auto;
    }

    .btn-adicionar {
        background-color:rgb(55, 53, 168);
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-editar {
        background-color: #201f81;
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
    .btn-adicionar:hover {
            background-color:rgb(86, 84, 212);
            color: white;
        }

    .btn-responder:hover {
            background-color: #413fbb;
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

    img {
        width: 40px;
    }

    .btn-adicionar,
    .btn-editar,
    .btn-excluir {
        padding: 4px 8px;
        font-size: 13px;
    }
    }
</style>

<div class="container">
    <a href="/frmproduto" class="btn-adicionar">Adicionar Produto</a>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Foto</th>
                <th>Nome</th>
                <th>Preco</th>
                <th>Estoque</th>
                <th>Acões</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $prod)
            <tr>
                <td>{{ $prod->id }}</td>
                <td>
                    <img src="{{ asset('storage/' . $prod->foto) }}" alt="Imagem Produto">
                </td>
                <td>{{ $prod->nome }}</td>
                <td>R$ {{ number_format($prod->preco, 2, ',', '.') }}</td>
                <td>{{ $prod->estoque }}</td>
                <td>
                    <a href="/frmeditproduto/{{ $prod->id }}" class="btn-editar">Editar</a>
                    <form action="/excluirproduto/{{ $prod->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Excluir" class="btn-excluir">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
