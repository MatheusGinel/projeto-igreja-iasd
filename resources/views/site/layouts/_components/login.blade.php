{{ $slot }}
<form action={{ route('site.login') }} method="post"> 
    @csrf
    <input name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário" class="{{ $classe }}"><br>
    {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}
    <br>
    <input name="senha" value="{{ old('senha') }}" type="password" placeholder="Senha" class="{{ $classe }}"><br>
    {{ $errors->has('senha') ? $errors->first('senha') : '' }}
    <br>
    <br>
    <button type="submit" class="{{ $classe }}">ENTRAR</button>
    <br>
    <br>
    <a href="{{ route('site.novocadastro') }}">Não tem cadastro? <br>Clique aqui e realize agora mesmo!</a>
</form><br>
{{ isset($erro) && $erro != '' ? $erro : '' }}