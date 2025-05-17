<!-- VALORES EM CAIXAS COM HEROICONS + AOS -->
<section class="bg-white pt-4 pb-16 px-6">
    <div class="max-w-6xl mx-auto text-center space-y-10">
        <h2 class="text-3xl font-bold text-red-700">Nossos Valores</h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 text-left">
            @foreach ([
                ['icon' => 'heart', 'title' => 'Amor', 'desc' => 'Vivemos o amor de Cristo em ações práticas e relacionamentos saudáveis.'],
                ['icon' => 'book-open', 'title' => 'Conhecimento', 'desc' => 'Buscamos crescer no conhecimento bíblico e teológico com profundidade.'],
                ['icon' => 'users', 'title' => 'Relacionamento', 'desc' => 'Caminhamos juntos em comunhão, discipulado e encorajamento mútuo.'],
                ['icon' => 'gift', 'title' => 'Generosidade', 'desc' => 'Servimos com liberalidade, doando tempo, talentos e recursos para o Reino.'],
                ['icon' => 'hand-raised', 'title' => 'Serviço', 'desc' => 'Somos chamados a servir com humildade e excelência, como Cristo serviu.'],
                ['icon' => 'light-bulb', 'title' => 'Criatividade', 'desc' => 'Expressamos o Evangelho com beleza, inovação e linguagem relevante.'],
                ['icon' => 'star', 'title' => 'Excelência', 'desc' => 'Fazemos todas as coisas como para o Senhor, com dedicação e cuidado.'],
            ] as $index => $valor)
            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-md transition" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="w-10 h-10 mb-3 text-red-700">
                    @include('components.icons.' . $valor['icon'])
                </div>
                <h3 class="font-bold text-lg text-red-700">{{ $valor['title'] }}</h3>
                <p class="text-gray-600">{{ $valor['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>