@extends("layouts.site")

@section("titulo", "Login")

@section("content")

<form action="{{ route('site.login.entrar') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
        <div class="col s6 l4">
        <div class="input-field">
            <input type="text" name="email">
            <label>Email:</label>
        </div>
        <div class="input-field">
            <input type="password" name="password">
            <label>Senha:</label>
        </div>

        <button class="btn dark-blue-4">Entrar</button>
    </div>
</div>
</div>

</form>


@endsection