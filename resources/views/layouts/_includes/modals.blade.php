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
            @include('layouts._forms')

            <div class="center-align">
                <button class="waves-effect waves-light btn teal">Salvar alterações</button>
            </div>
        </div>
    </div>
</div>

<div id="modalExcluir" class="modal">
    <div class="modal-content">
        <h4 class="center">Deseja realmente excluir este contato?</h4><br>

        <div class="center-align">
            <div class="row ">
                <button class="btn teal">Sim</button>
                <button class="btn red">Não</button>

            </div>

        </div>
    </div>
</div>