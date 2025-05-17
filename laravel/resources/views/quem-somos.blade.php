@extends('layouts.app')

@section('title', 'Quem Somos')

@section('content')

<section class="pt-24 bg-white py-16 px-6">
    <div class="max-w-5xl mx-auto space-y-8">
        <h2 class="text-4xl font-bold text-red-700 text-center">Quem Somos</h2>

        <p class="text-gray-700 leading-relaxed">
            A Comunidade Cristã Mosaico foi fundada em 10 de Janeiro de 2021 na cidade de Joinville/SC, Brasil.
        </p>

        <h3 class="text-2xl font-bold text-red-700">Nossa localização dentro da Tradição Cristã</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-3">
            <li>
                <strong>Somos uma comunidade:</strong> a essência de uma igreja é a congregação das pessoas que a compõem, ou seja, um organismo vivo que o Novo Testamento chama de Corpo de Cristo. Comunidade é a comum unidade, ou seja, estamos unidos em torno de algo em comum — Cristo, seu Reino, sua Palavra e sua Missão.
            </li>
            <li>
                <strong>Uma comunidade cristã:</strong> indica a orientação espiritual desta comunidade de Jesus Cristo.
            </li>
            <li>
                <strong>Evangélica/Protestante:</strong> indica a tradição da Cristandade com a qual a Comunidade se identifica. Evangélica porque acreditamos e seguimos o Evangelho do Senhor. Protestante porque seguimos os ideais da Reforma Protestante: Somente as Escrituras, Somente a Fé, Somente a Graça, Somente Cristo e Somente Deus a Glória.
            </li>
        </ul>

        <h3 class="text-2xl font-bold text-red-700">Por que Comunidade Cristã Mosaico?</h3>
        <p class="text-gray-700 leading-relaxed">
            Acreditamos que exista somente uma Igreja, ou seja, somente um corpo espiritual de Cristo (Ef 4.4-6). Logo, a Comunidade Cristã Mosaico é uma parte desse todo, que é a Igreja. A comunidade cristã é a comunhão daqueles que perseveram na doutrina dos apóstolos, que partilham o pão, a vida e as orações (At 2.42).
        </p>
        <p class="text-gray-700 leading-relaxed">
            Nessa estrutura chamada Templo do Espírito Santo, somos pequenos blocos que não teriam utilidade estando desalinhados, mas que, unidos, formam esse corpo espiritual de Cristo, no qual o Espírito Santo habita. Somos, portanto, peças de um grande mosaico que em uma unidade relacional expressamos o reino dos céus. (1 Pe 2.5)
        </p>
    </div>
</section>

<section class="py-12 bg-gray-100">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl font-bold text-red-700 text-center mb-6">Nossa Comunidade em Imagens</h2>

        <div class="relative">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($imagens as $img)
                        <div class="swiper-slide">
                            <img src="{{ asset($img) }}" alt="Imagem" class="rounded-xl shadow w-full h-[450px] object-cover object-center">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev !text-red-700"></div>
                <div class="swiper-button-next !text-red-700"></div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper(".mySwiper", {
            loop: true,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });
    });
</script>

@endsection
