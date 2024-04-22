{{ $slot }}
<form action={{ route('site.home') }} method="get"> 
    @csrf
    <input name="usuario" type="text" placeholder="Usuário" class="{{ $classe }}">
    <br>
    <input name="senha" type="password" placeholder="Senha" class="{{ $classe }}">
    <br>
    <br>
    <button type="submit" class="{{ $classe }}">ENTRAR</button>
    <br>
    <br>
    <a href="{{ route('site.novocadastro') }}">Não tem cadastro? <br>Clique aqui e realize o seu cadastro</a>
</form>