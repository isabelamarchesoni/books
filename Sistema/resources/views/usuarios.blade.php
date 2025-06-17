@extends('template')
@section('titulo', 'Usuários')
 
@section('conteudo')
<div class="container">
    <a href="/frmusuario">Adicionar Usuário</a>
    <br>
    <table>
        <tr>
            <th>Nome </th>
            <th>Email</th>
            <th>Ações</th>
            <th></th>         
        </tr>
        @foreach($users as $u)
        <tr>
            <td>{{  $u->nome   }}</td>
            <td>{{  $u->email  }}</td>
            <td>
                <a href="/frmeditusuario/{{$u->id}}" class="btn-editar">
                    Editar
                </a>
            </td>
            <td>
                <form action="/excluirusuario/{{$u->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Excluir" class="btn-excluir">
        </tr>
        @endforeach
    </table>
</div>
@endsection
 
 
