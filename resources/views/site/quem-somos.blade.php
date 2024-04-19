@extends('site.layouts.basico')

@section('titulo', 'Quem Somos')

@section('conteudo')
    <div class="conteudo-destaque">
        <br>
        <div class="esquerda">
            <div class="informacoes">
                <h1>QUEM SÃO OS ADVENTISTAS?</h1>
                <p>Os adventistas do sétimo dia, com mais de 21.9 milhões de membros no mundo, são membros de uma igreja cristã protestante organizada em 1863 nos Estados Unidos. Sua origem ocorre logo depois do movimento liderado por Guilherme Miller, que ressaltou a necessidade de maior ênfase na pregação sobre a breve volta de Jesus Cristo a esse mundo. A sede sul-americana da Igreja Adventista do Sétimo Dia, responsável pela coordenação administrativa em oito países, registra mais de dois milhões de membros.<p>
                <br>
                <span class="texto-branco">A Igreja Adventista do Sétimo Dia possui a seguinte Missão e Visão:</span>
                <div class="chamada">
                    <img src="{{ asset ('img/check.png') }}">
                    <span class="texto-branco"><b>Missão: </b>Fazer discípulos de todas as nações, comunicando o evangelho eterno no contexto da tríplice mensagem angélica de Apocalipse 14:6-12, convidando-as a aceitar a Jesus como Seu salvador pessoal e unir-se a Sua igreja remanescente, instruindo-as para servi-Lo como Senhor e preparando-as para Sua breve volta.</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset ('img/check.png') }}">
                    <span class="texto-branco"><b>Visão :</b>Em harmonia com as grandes profecias das Escrituras, entendemos que o clímax do plano de Deus é restaurar toda a Sua criação à completa harmonia com Sua perfeita vontade e justiça.</span>
                </div>
                <br>
                <br>
                <div class="novo-tempo">
                    <span class="texto-branco"><b>Nossos Parceiros:</b></span>
                    <br>
                    <br>
                    <a href="https://www.novotempo.com/"><img src="{{ asset ('img/novo-tempo.png') }}"></a>
                    <a href="https://pprudente.educacaoadventista.org.br/"><img src="{{ asset ('img/adv.png') }}"></a>
                    <br>
                </div> 
                
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Estilo de Vida Adventista</h1>
                <p>Os adventistas crêem em uma vida integralmente dedicada a Deus nos aspectos físico, psicológico, emocional e espiritual. Ensinam a respeito desse estilo com base em oito remédios divinos que são água, alimentação saudável, ar puro, luz solar, exercício físico, temperança, repouso e confiança em Deus.<p>
                <span class="texto-branco">Os adventistas possuem um estilo de vida que envolve o descanso semanal no sábado, dia separado por Deus para um relacionamento maior com Suas criaturas.</span>
                <h1>Comunhão com Deus</h1>   
                <p>Os adventistas enfatizam a comunhão com Deus através da oração, do estudo da Bíblia e do testemunho.</p>             
                <p>A oração envolve a busca da presença de Deus nas primeiras horas de cada dia. O estudo da Bíblia é ressaltado como uma maneira de ouvir as orientações divinas diariamente. O testemunho é compreendido como resultado natural dessa comunhão mantida como um hábito na vida dos que creem.</p>
            </div>
        </div>
    </div>
@endsection