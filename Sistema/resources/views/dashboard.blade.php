@extends('template')

@section('titulo', 'Dashboard')

@section('conteudo')

    <style>
        body {
            background-color: #f4f4f4;
        }

        .dashboard-container {
            padding: 50px 20px;
            text-align: center;
        }

        .dashboard-container h2 {
            margin-bottom: 40px;
        }

        .card-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .card {
            width: 180px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.2s;

            /* Icons ajustados */
            display:flex;
            flex-direction:column;    
            align-items:center;       
            justify-content:space-between;
            text-align:center;        
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 60px;
            height: 60px;
        }

        .card h4 {
            font-size: 16px;
            margin: 15px 0 5px;
        }

        .card p {
            font-size: 13px;
            color: #666;
        }
        .btn {
            background-color:#201f81;
            color: white;
        }

        .btn:hover {
            background-color:#413fbb;
            color: white;
        }
        @media (max-width: 768px) {
    .dashboard-container {
        padding: 30px 10px;
    }

    .card-grid {
        gap: 20px;
    }

    .card {
        max-width: 90%;
    }
}

@media (max-width: 480px) {
    .dashboard-container h2 {
        font-size: 1.5em;
    }

    .card img {
        width: 50px;
        height: 50px;
    }

    .card h4 {
        font-size: 14px;
    }

    .card p {
        font-size: 12px;
    }
}

    </style>

    <div class="dashboard-container">
        <h2>Bem-vindo(a),{{ $usuario->nome ?? 'Usuário' }} </h2>

          <div class="card-grid">
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png" alt="Cadastro de Usuários">
                <h4>Cadastro de Usuários</h4>
                <a href="{{ url('/frmusuario') }}" class="btn">Criar novo usuário</a>
 
            </div>
 
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/2649/2649150.png" alt="Cadastro de Produtos">
                <h4>Cadastro de Produtos</h4>
                <a href="{{ url('/frmproduto') }}" class="btn">Adicionar novo Produto</a>
            </div>
 
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/2666/2666436.png" alt="Lista de Usuários">
                <h4>Lista de Usuários</h4><br>
                <a href="{{ url('/usuarios') }}" class="btn">Visualizar todos os Usuários</a>
            </div>
 
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/5432/5432799.png" alt="Lista de Produtos">
                <h4>Lista de Produtos</h4><br>
                <a href="{{ url('/frmprodutoslist') }}" class="btn">Visualizar todos os Produtos</a>
            </div>
 
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/5441/5441859.png" alt="Lista de Contatos">
                <h4>Lista de Contatos</h4><br>
                <a href="{{ url('/frmcontatolist') }}" class="btn">Visualizar todos os Contatos</a>
            </div>
        </div>
    </div>
    
@endsection
