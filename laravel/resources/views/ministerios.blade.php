@extends('layouts.app')

@section('title', 'Ministérios')

@section('content')
<section class="max-w-4xl mx-auto px-4 py-16 space-y-12">
    <div class="text-center">
        <h2 class="text-4xl font-bold text-red-700">Departamentos e Cursos</h2>
        <p class="text-gray-600 mt-2">Conheça as expressões ministeriais da Comunidade Cristã Mosaico</p>
    </div>

    <!-- Sala de Oração -->
    <div class="bg-white p-6 rounded-xl shadow space-y-4" data-aos="fade-up">
        <h3 class="text-2xl font-bold text-red-700">Sala de Oração</h3>
        <p class="text-sm text-gray-500 italic">Quartas-feiras, às 20h</p>
        <p class="text-gray-700 leading-relaxed">
            Entendemos a Sala de Oração como o coração da Comunidade Cristã Mosaico. Assim como na época do rei Davi, estamos dispostos a construir um lugar de habitação para o Senhor, preparando intercessores incessantes. Estamos comprometidos em manter a oração e adoração como fundamentos da vida cristã.
        </p>
        <blockquote class="border-l-4 border-red-600 pl-4 text-red-800 italic">
            "Minha casa será chamada casa de oração" — Mateus 21:13
        </blockquote>
        <blockquote class="border-l-4 border-red-600 pl-4 text-red-800 italic">
            "Por isso estão diante do trono de Deus, e o servem de dia e de noite no seu templo; e aquele que está assentado sobre o trono os cobrirá com a sua sombra." — Apocalipse 7:15
        </blockquote>
        <p class="text-gray-700">
            Inspirados pelo movimento da International House of Prayer (IHOPKC), formamos intercessores que adoram com canções conhecidas, espontâneas e oracionalmente baseadas nas Escrituras.
        </p>
        <blockquote class="border-l-4 border-red-600 pl-4 text-red-800 italic">
            "Senhor, lembra-te de Davi e das dificuldades que enfrentou... enquanto não encontrar um lugar para o Senhor, uma habitação para o Poderoso de Jacó" — Salmos 132:1-5
        </blockquote>
    </div>

    <!-- Grupos Pequenos -->
    <div class="bg-white p-6 rounded-xl shadow space-y-4" data-aos="fade-up">
        <h3 class="text-2xl font-bold text-red-700">Grupos Pequenos (GP)</h3>
        <p class="text-gray-700">
            A Comunidade Cristã Mosaico valoriza a comunhão entre os santos. Os Grupos Pequenos são espaços de partilha da Palavra, oração e relacionamento fraterno.
        </p>
        <ul class="list-disc list-inside text-gray-600">
            <li>GP de Casais</li>
            <li>GP de Homens solteiros</li>
            <li>GP de Mulheres solteiras</li>
        </ul>
    </div>

    <!-- Escola Teológica Reformar -->
    <div class="bg-white p-6 rounded-xl shadow space-y-4" data-aos="fade-up">
        <h3 class="text-2xl font-bold text-red-700">Escola Teológica Reformar</h3>
        <p class="text-sm text-gray-500 italic">Aulas terças e quintas, às 20h</p>
        <p class="text-gray-700">
            A escola tem como objetivo edificar o Corpo de Cristo através do estudo das Escrituras e da Teologia equilibrada, formando discípulos genuínos que reflitam o caráter de Jesus.
        </p>
        <p class="text-gray-700">O curso é dividido em 3 módulos de 6 meses cada.</p>
    </div>

    <!-- Culto Dominical -->
    <div class="bg-white p-6 rounded-xl shadow space-y-4" data-aos="fade-up">
        <h3 class="text-2xl font-bold text-red-700">Culto Dominical</h3>
        <p class="text-sm text-gray-500 italic">Domingos, a partir das 19h</p>
        <p class="text-gray-700">
            Nossos cultos são momentos de celebração, onde ouvimos a Palavra, louvamos ao Senhor e celebramos a Ceia em unidade com o Corpo de Cristo.
        </p>
    </div>
</section>
@endsection
