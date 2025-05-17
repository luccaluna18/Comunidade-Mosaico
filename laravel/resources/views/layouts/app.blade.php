<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title>{{ config('app.name', 'Comunidade Cristã Mosaico') }}</title>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
    html {
        scroll-behavior: smooth;
    }
</style>

</head>
<body class="bg-gray-100 text-gray-900">

    <!-- NAVBAR FIXA -->
    <nav class="bg-white shadow fixed top-0 left-0 right-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo-mosaico.png') }}" alt="Logo" class="h-10">
                </a>
                <span class="text-lg font-semibold text-red-700">Comunidade Cristã Mosaico</span>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="{{ url('/') }}" class="hover:text-red-700">Início</a>
                <a href="{{ url('/quem-somos') }}" class="hover:text-red-700">Quem Somos</a>
                <a href="{{ url('/ministerios') }}" class="hover:text-red-700">Ministérios</a>
                <a href="{{ url('/catecismo') }}" class="hover:text-red-700">Catecismo</a>
                <a href="{{ url('/') }}#contato" class="hover:text-red-700">Contato</a>
            </div>
            <!-- Botão Mobile -->
            <div class="md:hidden">
                <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="w-6 h-6 text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Menu Mobile -->
        <div id="mobile-menu" class="md:hidden hidden bg-white px-4 pb-4 space-y-2 shadow">
            <a href="{{ url('/') }}" class="block py-2 hover:text-red-700">Início</a>
            <a href="{{ url('/quem-somos') }}" class="block py-2 hover:text-red-700">Quem Somos</a>
            <a href="{{ url('/ministerios') }}" class="block py-2 hover:text-red-700">Ministérios</a>
            <a href="{{ url('/catecismo') }}" class="block py-2 hover:text-red-700">Catecismo</a>
            <a href="{{ url('/') }}#contato" class="block py-2 hover:text-red-700">Contato</a>
        </div>
    </nav>

    <!-- Espaço reservado pela navbar fixa -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800,
            easing: 'ease-in-out'
        });
    </script>
</body>
</html>
