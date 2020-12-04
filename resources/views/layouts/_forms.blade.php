<div class="input-field">
    <input type="text" name="nome"
value="{{isset($registro->nome) ? $registro->nome: ''}}">
    <label>Nome</label>
</div>

<div class="input-field">
    <input type="text" name="email"
        value="{{isset($registro->email) ? $registro->telefone: ''}}">
    <label>Email</label>
</div>

<div class="input-field">
    <input type="text" name="telefone"
        value="{{isset($registro->telefone) ? $registro->telefone: ''}}">
    <label>Telefone</label>
</div>

<div class="input-field">
    <input type="text" name="endereco"
        value="{{isset($registro->endereco) ? $registro->endereco: ''}}">
    <label>Endereço</label>
</div>

<input type="hidden" name='id' value="{{isset($registro->id) ? $registro->id: ''}}">

<input type="hidden" name="id_users" value="1">

