@extends('template.template')

@section('conteudo')
    <div class="container">
        <picture class="d-flex my-5">
            <source media="(min-width: 992px)" srcset="{{ asset('img/sobre/img-perfil-lg.webp')}}">
            <source media="(min-width: 576px)" srcset="{{ asset('img/sobre/img-perfil-sm.webp')}}">
            <img src="{{ asset('img/sobre/img-perfil-auto.webp')}}" alt="Fellype Ferraz Pecly" class="mx-auto img-fluid">
        </picture>
        <div class="pt-3 mb-5">
            <h1 class="quem-sou__titulo font-xxl mb-4">Conheça o Fellype.</h1>

            <p class="quem-sou__conteudo font-s pt-2">Entre idas e vindas em instituições hospitalares para o tratamento de um problema de saúde que durou cerca de dez anos, nasceu meu desejo pela psicologia. Em um espaço onde os corpos pedem ajuda e a mente quer auxílio, parecia difícil encontrar uma oportunidade para expressar todas as questões, entre as angústias à busca por amparo nem sempre é física, foi precisando falar que eu compreendi a importância de ter quem escutar.</p>
            <p class="quem-sou__conteudo font-s">Me construí psicólogo conhecendo outros, nunca mais me vi fazendo outra coisa. A minha atuação advém da união entre psicanálise e redes de saúde e atenção, onde sou constantemente convocado para trabalhar uma escuta sensível, ética e não excludente, induzido a construir uma clínica que também se faz para além do setting analítico tradicional. Durante minha graduação, me debrucei sobre a temática da angústia, do desamparo e do luto, da morte preanunciada e da finitude escancarada, compreendendo que nos percursos da vida até a morte é o paciente quem dá significado para própria existência, não sendo possível completar o trajeto correndo de si.</p>
            <p class="quem-sou__conteudo font-s">Integrado à universidade, tive a oportunidade de aguçar minha escuta através dos atendimentos clínicos em instituições de saúde, a experiência com pacientes diagnosticados com câncer e o suporte às demandas de ideações e tentativas de suicídio, abuso sexual, depressão, ansiedade, violências, vícios, luto e tantas outras questões que surgiram nesse período reforçaram a ideia de que todo sujeito que ainda pulsa vida, nem sempre é êxtase total ou desencanto absoluto, apenas um testemunho do que acontece com si durante o processo de adoecimento, físico ou mental, da vida ou da alma, onde a escuridão às vezes é do problema e outras do próprio coração.</p>
            <p class="quem-sou__conteudo font-s">A psicologia me trouxe de novo para o campo das possibilidades e me deu autonomia, me fazendo acreditar que todos deveriam experimentar a sensação de ter a mente livre de aprisionamentos e limitações. Eu aceitei o desafio de correr atrás de algo que eu sempre quis e me coloquei a disposição para trilhar o percurso, mesmo sem saber qual seria o destino final, hoje sou movido por esse desejo e pouco importa a chegada quando a caminhada me acrescenta tanto.</p>
            <h2 class="quem-sou__autor font-s-b">Atenciosamente. Fellype Ferraz Pecly CRP: 05/67330</h2>
        </div>
    </div>
@endsection