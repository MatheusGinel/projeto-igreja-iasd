{{ $slot }}
<form action={{ route('site.novocadastro') }} method="post"> 
    @csrf
    <input name="usu_nome_exibicao" value="{{ old('usu_nome_exibicao') }}" type="text" placeholder="Nome de exibição" class="{{ $classe }}"><br>
    @if ($errors->has('usu_nome_exibicao'))
        {{ $errors->first('usu_nome_exibicao') }}
    @endif
    <br>
    <input name="usu_nome_completo" value="{{ old('usu_nome_completo') }}" type="text" placeholder="Nome completo" class="{{ $classe }}"><br>
    {{ $errors->has('usu_nome_completo') ? $errors->first('usu_nome_completo') : '' }}
    <br>
    <input name="usu_contato" value="{{ old('usu_contato') }}" type="text" placeholder="Telefone para contato" class="{{ $classe }}"><br>
    {{ $errors->has('usu_contato') ? $errors->first('usu_contato') : '' }}
    <br>
    <input name="usu_endereco" value="{{ old('usu_endereco') }}" type="text" placeholder="Endereço" class="{{ $classe }}"><br>
    {{ $errors->has('usu_endereco') ? $errors->first('usu_endereco') : '' }}
    <br>
    <input name="usu_email" value="{{ old('usu_email') }}" type="text" placeholder="E-mail" class="{{ $classe }}"><br>
    {{ $errors->has('usu_email') ? $errors->first('usu_email') : '' }}
    <br>
    <input name="usu_senha" value="{{ old('usu_senha') }}" type="password" placeholder="Senha" class="{{ $classe }}"><br>
    {{ $errors->has('usu_senha') ? $errors->first('usu_senha') : '' }}
    <br>
    <br>
    <button type="submit" class="{{ $classe }}"><b>Cadastrar</b></button>
</form>