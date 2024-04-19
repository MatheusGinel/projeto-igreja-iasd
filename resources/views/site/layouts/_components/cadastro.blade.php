{{ $slot }}
<form action={{ route('site.novocadastro') }} method="get"> 
    @csrf
    <input name="usu_nome_exibicao" type="text" placeholder="Nome de exibição" class="{{ $classe }}">
    <br>
    <input name="usu_nome_completo" type="text" placeholder="Nome completo" class="{{ $classe }}">
    <br>
    <input name="usu_contato" type="text" placeholder="Telefone para contato" class="{{ $classe }}">
    <br>
    <input name="usu_endereco" type="text" placeholder="Endereço" class="{{ $classe }}">
    <br>
    <input name="usu_email" type="text" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <input name="usu_senha" type="password" placeholder="Senha" class="{{ $classe }}">
    <br>
    <br>
    <button type="submit" class="{{ $classe }}"><b>Cadastrar</b></button>
</form>