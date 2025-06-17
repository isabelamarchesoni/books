@extends('template')
 
@section('titulo', 'Sobre')
 
@section('conteudo')
    <div class="container my-5 d-flex justify-content-center">
        <div class="card shadow rounded py-4 px-5" style="max-width: 900px; width: 100%;">
 
            <h2 class="fw-bold text-center">Quem é a Book?</h2>
 
            <p class="text-start">
                Fundada com base na paixão pela leitura e na vontade de transformar histórias em experiências memoráveis, 
                a Book oferece um acervo cuidadosamente selecionado para atender leitores de todos os estilos, idades e interesses.
            </p>
            <p>
                Nosso compromisso vai além da venda de livros. Buscamos proporcionar momentos de inspiração, aprendizado e reflexão.
                 Cada obra em nosso catálogo é escolhida com critério, prezando pela qualidade do conteúdo e pela diversidade de gêneros literários.
            </p>
            <p>
                Na Book, acreditamos que a leitura é uma ferramenta poderosa de transformação pessoal e social.
                 Por isso, nossa missão é promover o acesso à literatura de forma acolhedora, criativa e apaixonada.

                Seja bem-vindo(a) ao universo da Book — onde cada página vira uma nova possibilidade.
            </p>
 
            <h3 class="fw-bold mt-5 mb-4 text-center">Equipe do Projeto</h3>
            <div class="row text-center justify-content-center">
 
                <div class="col-md-3 mx-3 mb-4">
                    <div class="p-3 rounded shadow-sm bg-white">
                        <img src="{{ asset('storage/imagens/perfilAmanda.jpeg') }}" alt="perfil_AMANDA"  class="img-fluid rounded-circle mb-2" alt="">
                        <p class="fw-bold mb-0">Amanda Araujo Lima</p>
                        <p>Dev Front-End</p>
                        <a href="https://github.com/MandyLima" class="link-dark">
                            <img src="{{ asset('storage/imagens/iconGit.png') }}" alt="GitHub" style="width:35px; height:35px;">
                        </a>
                    </div>
                </div>
 
                <div class="col-md-3 mx-3 mb-4">
                    <div class="p-3 rounded shadow-sm bg-white">
                        <img src="{{ asset('storage/imagens/perfilIsa.jpeg') }}" alt="perfil_ISA"  class="img-fluid rounded-circle mb-2" alt="">
                        <p class="fw-bold mb-0">Isabela Vitoria Marchesoni</p>
                        <p>Dev Back-End</p>
                        <a href="https://github.com/isabelamarchesoni" class="link-dark">
                            <img src="{{ asset('storage/imagens/iconGit.png') }}" alt="GitHub" style="width:35px; height:35px;">
                        </a>
                    </div>
                </div>
 
            </div>
 
        </div>
    </div>
@endsection
