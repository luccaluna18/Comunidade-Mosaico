@extends('layouts.app')

@section('title', 'Comunidade Cristã Mosaico')

@section('content')

<!-- HERO -->
<section class="relative bg-cover bg-center text-white py-24 px-6" style="background-image: url('/img/banner_image.jpg');">
    <div class="bg-black bg-opacity-50 absolute inset-0 z-0"></div>
    <div class="relative z-10 max-w-4xl mx-auto text-center space-y-6">
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Seja bem-vindo à Comunidade Cristã Mosaico</h1>
        <p class="text-lg md:text-xl max-w-2xl mx-auto">Somos peças de um grande mosaico que, em unidade relacional, expressa o Reino dos Céus.</p>
        <div class="flex justify-center gap-4 flex-wrap pt-6">
            <a href="/catecismo" class="bg-white text-red-700 px-6 py-3 rounded-full font-semibold hover:bg-red-100 transition">Ver Catecismo</a>
            <a href="/ministerios" class="border border-white px-6 py-3 rounded-full hover:bg-white hover:text-red-700 transition">Nossos Ministérios</a>
        </div>
    </div>
</section>

<!-- MISSÃO / VISÃO ESTILIZADAS COM IMAGENS -->
<section class="bg-white py-16 px-6">
    <div class="max-w-6xl mx-auto text-center space-y-12">
        <h2 class="text-3xl font-bold text-red-700">Nossa Identidade</h2>
        <div class="grid md:grid-cols-2 gap-8 text-left">

            <!-- Missão -->
            <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition" data-aos="fade-up">
                <div class="flex items-center gap-4 mb-4">
                    <img src="/img/missao.jpg" alt="Missão" class="w-16 h-16 object-cover rounded-full shadow">
                    <h3 class="text-xl font-bold text-red-700">Missão</h3>
                </div>
                <p class="text-gray-600">Preparar discípulos de Cristo para transformar o mundo.</p>
            </div>

            <!-- Visão -->
            <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center gap-4 mb-4">
                    <img src="/img/visao.jpg" alt="Visão" class="w-16 h-16 object-cover rounded-full shadow">
                    <h3 class="text-xl font-bold text-red-700">Visão</h3>
                </div>
                <p class="text-gray-600">Ser uma igreja para o seu tempo: bíblica, missional e relevante na sociedade que está inserida.</p>
            </div>

        </div>
    </div>
</section>



@include('components.valores')

<!-- FRASE DE IMPACTO -->
<section class="bg-red-50 py-16 px-4 text-center">
    <div class="max-w-3xl mx-auto">
        <h3 class="text-2xl font-semibold text-red-800">
            “Somos pequenos blocos que, unidos, formam o corpo espiritual de Cristo no qual o Espírito Santo habita.” (1 Pe 2.5)
        </h3>
    </div>
</section>

<!-- ENVOLVA-SE COM WHATSAPP (Ícone apenas no botão final) -->
<section id="contato" class="py-16 px-6 bg-gray-100">
    <div class="max-w-6xl mx-auto text-center space-y-8">
        <h2 class="text-3xl font-bold text-red-700">Participe Conosco</h2>
        <div class="grid sm:grid-cols-2 gap-6 text-left">

            <!-- Sala de Oração -->
            <a href="https://wa.me/554791934131?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20a%20Sala%20de%20Ora%C3%A7%C3%A3o%20da%20Mosaico!" target="_blank" class="block bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition" data-aos="fade-up">
                <h4 class="text-xl font-bold text-red-700">Sala de Oração</h4>
                <p class="text-gray-600 mt-2">Quartas às 20h — O coração da igreja: adoração contínua e intercessão.</p>
            </a>

            <!-- Grupos Pequenos -->
            <a href="https://wa.me/554791934131?text=Ol%C3%A1%2C%20gostaria%20de%20participar%20de%20um%20GP%20da%20Mosaico." target="_blank" class="block bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="100">
                <h4 class="text-xl font-bold text-red-700">Grupos Pequenos</h4>
                <p class="text-gray-600 mt-2">Casais, homens e mulheres em comunhão, partilhando a Palavra e a oração.</p>
            </a>

            <!-- Escola Teológica Reformar -->
            <a href="https://wa.me/554791934131?text=Ol%C3%A1%2C%20quero%20mais%20informa%C3%A7%C3%B5es%20sobre%20a%20Escola%20Teol%C3%B3gica%20Reformar%20da%20Mosaico." target="_blank" class="block bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-xl font-bold text-red-700">Escola Teológica Reformar</h4>
                <p class="text-gray-600 mt-2">Terças e quintas às 20h — Ensino sólido para formar discípulos genuínos.</p>
            </a>

            <!-- Culto Dominical -->
            <a href="https://wa.me/554791934131?text=Ol%C3%A1%2C%20gostaria%20de%20participar%20do%20Culto%20Dominical%20da%20Mosaico." target="_blank" class="block bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="300">
                <h4 class="text-xl font-bold text-red-700">Culto Dominical</h4>
                <p class="text-gray-600 mt-2">A partir das 19h.</p>
            </a>

        </div>
        <div class="pt-8">
            <a href="https://wa.me/554791934131?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20a%20Comunidade." target="_blank" class="inline-flex items-center gap-2 bg-red-700 text-white px-6 py-3 rounded-full hover:bg-red-800 transition">
                <!-- Ícone do WhatsApp -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.004 0c-6.627 0-12 5.373-12 12 0 2.108.548 4.084 1.504 5.816l-1.6 5.816 5.965-1.566c1.678.906 3.596 1.434 5.663 1.434 6.627 0 12-5.373 12-12s-5.373-12-12-12zm6.236 17.157c-.26.73-1.516 1.398-2.08 1.488-.53.085-1.195.121-1.929-.121-.445-.145-1.012-.33-1.752-.648-3.087-1.331-5.12-4.595-5.276-4.816-.157-.222-1.26-1.677-1.26-3.202 0-1.523.79-2.27 1.072-2.576.282-.305.61-.382.813-.382s.406.002.582.01c.19.009.445-.072.697.53.26.625.878 2.149.957 2.306.075.157.127.342.025.552-.104.208-.157.337-.31.53-.154.194-.326.429-.465.577-.153.16-.313.334-.134.654.177.319.787 1.3 1.687 2.105 1.16 1.053 2.14 1.381 2.46 1.538.32.157.508.134.698-.08.19-.215.801-.935 1.016-1.254.216-.319.433-.265.73-.157.297.108 1.876.886 2.195 1.048.32.162.53.24.61.375.08.135.08.778-.18 1.508z"/>
                </svg>
                Fale com a gente
            </a>
        </div>
    </div>
</section>





@endsection