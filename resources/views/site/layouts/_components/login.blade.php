{{ $slot }}
<form action={{ route('site.entrar') }} method="get"> 
    @csrf
    <input name="usuario" type="text" placeholder="Usuário" class="{{ $classe }}">
    <br>
    <input name="senha" type="text" placeholder="Senha" class="{{ $classe }}">
    <br>
    <button type="submit" class="{{ $classe }}">ENTRAR</button>
</form>