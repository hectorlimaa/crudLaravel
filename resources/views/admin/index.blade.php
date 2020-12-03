@extends("layouts.site")

@section("titulo", "Contatos")

@section("content")
<div class="container">
    <div class="row align-center">
        <table class="centered responsive-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                </tr>
            </thead>
            
                <tbody>
                    @foreach($registros as $registro )
                    <tr>
                        <td>{{$registro->nome}}</td>
                        <td>{{$registro->email}}</td>
                        <td>{{$registro->telefone}}</td>
                        <td>{{$registro->endereco}}</td>
                        <td><a class="waves-effect waves-light btn modal-trigger" href="#modalEditar">Editar</a>
                            <a class="waves-effect waves-light btn modal-trigger" href="#modalExcluir">Excluir</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

    <div class="row">

        <a class="waves-effect waves-light btn modal-trigger" href="#modalAdicionar">Adicionar</a>


    </div>


</div>

@endsection