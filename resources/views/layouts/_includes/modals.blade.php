<div id="modalAdicionar" class="modal">
    <div class="modal-content">
        <h4 class="center">Adicionar Contato</h4><br>
        <div>
            <form action="{{ route('site.agenda.adicionar') }}" method="POST"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('layouts._forms')

                <div class="center-align">
                    <button class="waves-effect waves-light btn teal">Adicionar contato</button>
                </div>

            </form>
        </div>
    </div>
</div>

<div id="modalEditar" class="modal">
    <div class="modal-content">
        <h4 class="center">Editar Contato</h4><br>
        <div>
            <form action="{{ route('site.agenda.alterar') }}" method="POST"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">

                @include('layouts._forms')

                <div class="center-align">
                    <button class="waves-effect waves-light btn teal">Salvar alterações</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="modalExcluir" class="modal">
    <div class="modal-content">
        <h4 class="center">Deseja realmente excluir este contato?</h4><br>
        <form action="{{ route('site.agenda.deletar') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{isset($registro->id) ? $registro->id: ''}}">

            <div class="center-align">
                <div class="row ">
                    <button class="btn teal">Sim</button>
                <a href="{{route('site.home')}}" class="btn red">Não</a>

                </div>
        </form>
    </div>
</div>
</div>