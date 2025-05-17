@extends('layouts.app')

@section('title', 'Catecismo')

@section('content')
<section class="max-w-4xl mx-auto px-4 py-16 space-y-12">
    <div class="text-center">
        <h2 class="text-4xl font-bold text-red-700">Nosso Catecismo</h2>
        <p class="text-gray-600 mt-2">Explore os fundamentos da nossa fé por tópicos. Selecione uma seção abaixo:</p>
    </div>

    <div class="grid sm:grid-cols-2 gap-4">
        <a href="#criacao" class="block p-4 bg-white border rounded shadow hover:bg-red-50 transition">Deus, Criação e Queda</a>
        <a href="#jesus" class="block p-4 bg-white border rounded shadow hover:bg-red-50 transition">Jesus, Sua Pessoa e Sacramentos</a>
        <a href="#espirito" class="block p-4 bg-white border rounded shadow hover:bg-red-50 transition">O Espírito Santo e o Retorno do Rei</a>
        <a href="#escrituras" class="block p-4 bg-white border rounded shadow hover:bg-red-50 transition">Escrituras Sagradas</a>
    </div>

    <div id="criacao" class="pt-12 space-y-6">
        <h3 class="text-2xl font-bold text-red-700">Deus, Criação e Queda</h3>
        @foreach(collect($perguntas)->where('topico', 'criacao') as $p)
        <div class="bg-white p-6 rounded-xl shadow space-y-2">
            <h4 class="font-bold text-red-600 uppercase">Pergunta {{ $p['numero'] }}</h4>
            <p class="font-semibold text-gray-800">{{ $p['titulo'] }}</p>
            <p class="text-gray-700">{{ $p['resposta'] }}</p>
            <div class="text-sm text-gray-500 italic">Referências: {{ $p['referencias'] }}</div>
        </div>
        @endforeach
    </div>

    <div id="jesus" class="pt-12 space-y-6">
        <h3 class="text-2xl font-bold text-red-700">Jesus, Sua Pessoa e Sacramentos</h3>
        @foreach(collect($perguntas)->where('topico', 'jesus') as $p)
        <div class="bg-white p-6 rounded-xl shadow space-y-2">
            <h4 class="font-bold text-red-600 uppercase">Pergunta {{ $p['numero'] }}</h4>
            <p class="font-semibold text-gray-800">{{ $p['titulo'] }}</p>
            <p class="text-gray-700">{{ $p['resposta'] }}</p>
            <div class="text-sm text-gray-500 italic">Referências: {{ $p['referencias'] }}</div>
        </div>
        @endforeach
    </div>

    <div id="espirito" class="pt-12 space-y-6">
        <h3 class="text-2xl font-bold text-red-700">O Espírito Santo e o Retorno do Rei</h3>
        @foreach(collect($perguntas)->where('topico', 'espirito') as $p)
        <div class="bg-white p-6 rounded-xl shadow space-y-2">
            <h4 class="font-bold text-red-600 uppercase">Pergunta {{ $p['numero'] }}</h4>
            <p class="font-semibold text-gray-800">{{ $p['titulo'] }}</p>
            <p class="text-gray-700">{{ $p['resposta'] }}</p>
            <div class="text-sm text-gray-500 italic">Referências: {{ $p['referencias'] }}</div>
        </div>
        @endforeach
    </div>

    <div id="escrituras" class="pt-12 space-y-6">
        <h3 class="text-2xl font-bold text-red-700">Escrituras Sagradas</h3>
        @foreach(collect($perguntas)->where('topico', 'escrituras') as $p)
        <div class="bg-white p-6 rounded-xl shadow space-y-2">
            <h4 class="font-bold text-red-600 uppercase">Pergunta {{ $p['numero'] }}</h4>
            <p class="font-semibold text-gray-800">{{ $p['titulo'] }}</p>
            <p class="text-gray-700">{{ $p['resposta'] }}</p>
            <div class="text-sm text-gray-500 italic">Referências: {{ $p['referencias'] }}</div>
        </div>
        @endforeach
    </div>
</section>
@endsection
