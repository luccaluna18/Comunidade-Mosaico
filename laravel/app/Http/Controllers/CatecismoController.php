<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CatecismoController extends Controller
{
    public function index()
    {
        $perguntas = collect([
            [
                'numero' => 1,
                'titulo' => 'Quem é Deus?',
                'resposta' => ' Deus é espírito, infinito, eterno e imutável em seu ser, sabedoria, poder, santidade, justiça, bondade e verdade.',
                'referencias' => 'Jo 4.24; Ex 3.14; Sl 145.3; 90.2; Tg 1.17; Rm 11.33; Gn 17.1, Ap 4.8; Ex 34.6-7.',
                'topico' => 'criacao'
            ],
            [
                'numero' => 2,
                'titulo' => 'Quantas pessoas há na Divindade?',
                'resposta' => ' Há três pessoas na Divindade: o Pai, o Filho e o Espírito Santo, e estas três são um Deus, da mesma substância, iguais em poder e glória.',
                'referencias' => 'Mt 3.16-17; 28.19; 2Co 13.13; Jo 1.1; 3.18; At 5.3-4; Hb 1.3; Jo 10.30.',
                'topico' => 'criacao'
            ],
            [
                'numero' => 3,
                'titulo' => 'Qual é a obra da criação?',
                'resposta' => ' A obra da criação é aquela pela qual Deus fez todas as coisas do nada, no espaço de seis dias, e tudo muito bem.',
                'referencias' => 'Gn 1; Hb 11.3; Sl 33.9; Gn 1.31. 19',
                'topico' => 'criacao'
            ],
            [
                'numero' => 4,
                'titulo' => 'Como criou Deus o homem?',
                'resposta' => ' Deus criou o homem macho e fêmea, conforme a sua própria imagem, em conhecimento, retidão e santidade com domínio sobre as criaturas.',
                'referencias' => 'Gn 1.27-28; Cl 3.10; Ef 4.24; Rm 2.14- 15; Sl 86-8.',
                'topico' => 'criacao'
            ],
            [
                'numero' => 5,
                'titulo' => 'Conservaram-se nossos primeiros pais no estado em que foram criados?',
                'resposta' => 'Nossos primeiros pais, sendo deixados à liberdade da sua própria vontade, caíram do estado em que foram criados, pecando contra Deus. em que foram criados? Nossos primeiros pais, sendo deixados à liberdade da sua própria vontade, caíram do estado em que foram criados, pecando contra Deus.',
                'referencias' => 'Rm 5.12; Gn 3.6.',
                'topico' => 'criacao'
            ],
            [
                'numero' => 6,
                'titulo' => 'O que é pecado?',
                'resposta' => ' Pecado é qualquer falta de conformidade com a lei de Deus, ou qualquer transgressão desta lei.',
                'referencias' => 'Tg 2.10; 4.17; 1Jo 3.4.  20',
                'topico' => 'criacao'
            ],
            [
                'numero' => 7,
                'titulo' => 'Qual foi o pecado pelo qual nossos primeiros pais caíram do estado em que foram criados?',
                'resposta' => 'O pecado pelo qual nossos primeiros pais caíram do estado em que foram criados foi o de comerem do fruto proibido. caíram do estado em que foram criados? O pecado pelo qual nossos primeiros pais caíram do estado em que foram criados foi o de comerem do fruto proibido.',
                'referencias' => 'Gn 3.12-13; Os 6.7.',
                'topico' => 'criacao'
            ],
            [
                'numero' => 8,
                'titulo' => 'Caiu todo o gênero humano pela primeira transgressão de Adão?',
                'resposta' => 'Visto que o pacto feito com Adão não era somente para com ele, mas também para sua posteridade, todo gênero humano que dele procede por geração ordinária, pecou nele e caiu com ele na sua primeira transgressão. transgressão de Adão? Visto que o pacto feito com Adão não era somente para com ele, mas também para sua posteridade, todo gênero humano que dele procede por geração ordinária, pecou nele e caiu com ele na sua primeira transgressão.',
                'referencias' => 'Gn 1.28; At 17.26; 1Co 15.21-22; Rm 5.12-14.     21',
                'topico' => 'criacao'
            ],
            [
                'numero' => 9,
                'titulo' => 'Qual foi o estado ao qual a queda reduziu o gênero humano?',
                'resposta' => 'A queda reduziu o gênero humano a um estado de pecado e miséria. humano? A queda reduziu o gênero humano a um estado de pecado e miséria.',
                'referencias' => 'Rm 5.12.',
                'topico' => 'criacao'
            ],
            [
                'numero' => 10,
                'titulo' => 'Deus deixou todo o gênero humano perecer no estado de pecado e miséria?',
                'resposta' => 'Não. Aprouve a Deus, pela sua infinita misericórdia e pela sua boa vontade, desde a eternidade providenciar um meio para salvação do homem, por intermédio de um Redentor. estado de pecado e miséria? Não. Aprouve a Deus, pela sua infinita misericórdia e pela sua boa vontade, desde a eternidade providenciar um meio para salvação do homem, por intermédio de um Redentor.',
                'referencias' => 'Ef 1.4; Tt 1.2; 3.4-7; Jo 17.6.         22                        23          Jesus, sua Pessoa e Sacramentos        24',
                'topico' => 'criacao'
            ],
            [
                'numero' => 11,
                'titulo' => 'Quem é o Redentor dos escolhidos de Deus?',
                'resposta' => ' O único redentor é o Senhor Jesus Cristo que, sendo o eterno Filho de Deus, fez-se homem, tendo sido e continuando a ser Deus e homem em duas naturezas distintas, em uma só pessoa, para sempre.',
                'referencias' => '1Tm 2.5; Jo 1.14; Rm 9.5; Cl 2.9; Hb 13.8.',
                'topico' => 'jesus'
            ],
            [
                'numero' => 12,
                'titulo' => 'Como Cristo, sendo o Filho de Deus, fez-se homem?',
                'resposta' => 'Cristo, o Filho de Deus, fez-se homem ao tomar um verdadeiro corpo e uma alma racional, sendo concebido pelo poder do Espírito Santo no ventre da Virgem Maria, e nascido dela, mas sem pecado. homem? Cristo, o Filho de Deus, fez-se homem ao tomar um verdadeiro corpo e uma alma racional, sendo concebido pelo poder do Espírito Santo no ventre da Virgem Maria, e nascido dela, mas sem pecado.',
                'referencias' => 'Hb 2.14; Mt 26.38; Lc 2.52; 1.31, 35; Hb 4.15.     25',
                'topico' => 'jesus'
            ],
            [
                'numero' => 13,
                'titulo' => 'Que funções exerce Cristo como nosso Redentor?',
                'resposta' => 'Cristo, como nosso Redentor, exerce as funções de profeta, sacerdote e rei, tanto no seu estado de humilhação como no de exaltação. funções exerce Cristo como nosso Redentor? Cristo, como nosso Redentor, exerce as funções de profeta, sacerdote e rei, tanto no seu estado de humilhação como no de exaltação.',
                'referencias' => 'At 3.22; Hb 5.5-6; Sl 2.6; Jo 1.49.',
                'topico' => 'jesus'
            ],
            [
                'numero' => 14,
                'titulo' => 'Em que consistiu a humilhação de Cristo?',
                'resposta' => ' A humilhação de Cristo consistiu em Ele nascer, e isso em condição baixa, feito sujeito à lei; em sofrer as misérias desta vida, a ira de Deus e amaldiçoada morte na cruz; em ser sepultado, e permanecer debaixo do poder da morte durante certo tempo.',
                'referencias' => 'Lc 2.7; Fp 2.6-8; Gl 4.4; 3.13; Is 53.3; Mt 27.43; 1Co 15.3-4.',
                'topico' => 'jesus'
            ],
            [
                'numero' => 15,
                'titulo' => 'Em que consiste a exaltação de Cristo?',
                'resposta' => ' A exaltação de Cristo consiste em Ele ter ressurgido dos mortos no terceiro dia, em ter subido ao Céu e 26  estar assentado à direita de Deus Pai, e em vir para julgar o mundo no último dia.',
                'referencias' => '1Co 15.4; Ef 1.20-21; At 17.31.',
                'topico' => 'jesus'
            ],
            [
                'numero' => 16,
                'titulo' => 'Como nos tornamos participantes da redenção adquirida por Cristo?',
                'resposta' => 'Tornamo-nos participantes da redenção adquirida por Cristo pela eficaz aplicação dela a nós, através de Seu Santo Espírito. adquirida por Cristo? Tornamo-nos participantes da redenção adquirida por Cristo pela eficaz aplicação dela a nós, através de Seu Santo Espírito.',
                'referencias' => 'Jo 1.12; 3.5-6; Tt 3.5-6.',
                'topico' => 'jesus'
            ],
            [
                'numero' => 17,
                'titulo' => 'O que é justificação?',
                'resposta' => ' Justificação é um ato da livre graça de Deus, no qual Ele perdoa todos os nossos pecados e nos aceita como justos diante de Si, somente por causa da justiça de Cristo a nós imputada, e recebida só pela fé.',
                'referencias' => 'Ef 1.7; 2Co 5.21; Rm 4.6; 5.18; Gl 2.16.   27',
                'topico' => 'jesus'
            ],
            [
                'numero' => 18,
                'titulo' => 'O que é adoção?',
                'resposta' => ' Adoção é um ato de livre graça de Deus, pelo qual somos recebidos no número dos filhos de Deus e temos direito a todos os seus privilégios.',
                'referencias' => '1Jo 3.1; Jo 1.12; Rm 8.14-17.',
                'topico' => 'jesus'
            ],
            [
                'numero' => 19,
                'titulo' => 'O que é santificação?',
                'resposta' => ' É a obra da graça de Deus, pela qual somos renovados em todo o nosso ser, segundo a imagem de Deus, e habilitados a morrer cada vez mais para o pecado e a viver para a retidão.',
                'referencias' => '1Pe 1.2; Ef 4.20-24; Rm 6.6; 12.1-2.         28                        29           Os sacramentos         30',
                'topico' => 'jesus'
            ],
            [
                'numero' => 20,
                'titulo' => 'O que é um sacramento?',
                'resposta' => ' Sacramento vem do latim sacramentum e significa ritual sagrado. Os sacramentos são “ordenanças”, um ritual instituído por Jesus (uma ordem dada pelo próprio Cristo). No Novo Testamento temos duas ordens diretas em termos de práticas e rituais sagrados: o Batismo nas Águas (Cf. Marcos 16.15- 18) e a Ceia do Senhor (1. Co.11.23-26; Mateus 26:26-29; Marcos 14:22-25; Lucas 22:19-20; João 6:53-57).',
                'referencias' => '',
                'topico' => 'jesus'
            ],
            [
                'numero' => 21,
                'titulo' => 'Por que devo ser batizado?',
                'resposta' => ' 1) Para seguir o exemplo de JESUS – Marcos 1.9. 2) Por que Jesus Cristo ORDENA – Mateus 28.19-20 .',
                'referencias' => '',
                'topico' => 'jesus'
            ],
            [
                'numero' => 22,
                'titulo' => 'Qual é o significado do batismo?',
                'resposta' => ' 1) Ilustrar a MORTE e ressurreição de Cristo – 1 Coríntios 15.3-4 e Colossenses 2.12.  31  2) Ilustrar minha NOVA VIDA como cristão – 2 Coríntios 5.17 e Romanos 6.4.',
                'referencias' => '',
                'topico' => 'jesus'
            ],
            [
                'numero' => 23,
                'titulo' => 'Quem deve ser batizado?',
                'resposta' => ' Qualquer pessoa que tenha CRIDO em Cristo - Atos 2.41; 8.12-13.',
                'referencias' => '',
                'topico' => 'jesus'
            ],
            [
                'numero' => 24,
                'titulo' => 'O que é a Ceia do Senhor?',
                'resposta' => '(1Co 11.23-26) É uma lembrança (memória) – 1. Co 11.24 –, é um símbolo (cerimônia simbólica) – v. 25 –, é também uma confissão de fé – v. 26.',
                'referencias' => '',
                'topico' => 'jesus'
            ],
            [
                'numero' => 25,
                'titulo' => 'Como devo me preparar para a Ceia do Senhor?',
                'resposta' => ' 1) Fazendo um exame pessoal (1Co 11.17); 2) Confessando meus pecados (1Jo 1.9); 3) Relembrando o compromisso (Rm 12.1); 4) Restaurando relações  (Mt 5.23-24).   32                        33          O Espírito Santo, Sua Obra e o Retorno do Rei 34',
                'referencias' => '',
                'topico' => 'jesus'
            ],
            [
                'numero' => 26,
                'titulo' => 'Quem é o Espírito Santo?',
                'resposta' => ' O Espírito Santo é Deus, possui os mesmos atributos do Pai e do Filho, a saber: Onipotência (SI 104.30; Ef 3.16; At 1.8), Onisciência (I Co 2.10,11), Onipresença (SI 139.7-10; I Co 2.10), Eternidade (Hb 9.14). Como diz o credo de Atanásio, Ele “não foi feito, nem criado, nem gerado, mas procede do Pai e do Filho”.',
                'referencias' => '',
                'topico' => 'espirito'
            ],
            [
                'numero' => 27,
                'titulo' => 'Qual é a Função do Espírito Santo?',
                'resposta' => ' Levar-nos ao arrependimento (Jo 16:8); interceder por nós (Rm 8.1); conceder os dons espirituais (1Co 12.8-10); produzir frutos em nós (Gl 5.22-23).      35          ESCRITURAS SAGRADAS        36',
                'referencias' => '',
                'topico' => 'espirito'
            ],
            [
                'numero' => 28,
                'titulo' => 'O que é a Palavra de Deus?',
                'resposta' => ' As Escrituras do Antigo e do Novo Testamento, sendo dadas por inspiração Divina, são a Palavra de Deus. A única regra infalível de fé e prática.',
                'referencias' => '1 Pedro 1:21; 2 Timóteo 3:16-17; Isaías 8:20.',
                'topico' => 'escrituras'
            ],
            [
                'numero' => 29,
                'titulo' => 'Como nós sabemos que a Bíblia é a Palavra de Deus?',
                'resposta' => 'A Bíblia evidencia ser a Palavra de Deus pela sublimidade de sua doutrina, a unidade de suas partes, o seu poder para converter os pecadores e para edificar os santos; mas somente o Espírito de Deus, testemunhando com e através das Escrituras em nossos corações, é completamente capaz de nos convencer de que a Bíblia é a Palavra de Deus. Deus? A Bíblia evidencia ser a Palavra de Deus pela sublimidade de sua doutrina, a unidade de suas partes, o seu poder para converter os pecadores e para edificar os santos; mas somente o Espírito de Deus, testemunhando com e através das Escrituras em nossos corações, é completamente capaz de nos convencer de que a Bíblia é a Palavra de Deus.',
                'referencias' => '1 Coríntios 2:6, 7, 13; Salmos 119:18, 129; Atos 10:43, 26:22; 18:28; Hebreus 4:12; Salmos 19:7-9; Romanos 15:4; João 16:13-14; 1 João 2:20- 27; 2 Coríntios 3:14-17. 37            O Retorno do Rei       38',
                'topico' => 'escrituras'
            ],
            [
                'numero' => 30,
                'titulo' => '. O que é a Volta de Jesus?',
                'resposta' => ' A volta de Jesus é o evento que marca o retorno visível de Jesus para encontrar a sua noiva (Igreja) e restaurar o seu reino milenar na terra. Sabemos que Ele voltará para arrebatar os salvos, nas nuvens (I Ts 4.16,17); e que virá à Terra para instaurar o Milênio (Ap 19.11,15; 20.1-6).',
                'referencias' => '',
                'topico' => 'espirito'
            ],
            [
                'numero' => 31,
                'titulo' => 'Como devemos aguardar a volta de Jesus?',
                'resposta' => ' Devemos aguardá-lo confiando em sua promessa e vigiando em nossas ações (cf. Tito 2.12-13; Judas 1.21; Mateus 25.4) e com os nossos corações cheios da bendita esperança Tito 2.13.          39  Referências   ATANÁSIO. Credo de Atanásio. Disponível em:http://www.monergismo.com/textos/credos/credo atanasio.htm  BEVINS, Winfield. O discipulado no tempo dos Puritanos. O Estandarte de Cristo, 2015.   Bíblia, Nova Versão Transformadora. Disponível em: https://www.bibliaonline.com.br/nvt  HANSEN, Collin (Org). Devocional do Catecismo Nova Cidade: A verdade de Deus para nossos corações e mentes / introdução de Tim Keller; - São José dos Campos, SP: Fiel, 2017.',
                'referencias' => '',
                'topico' => 'espirito'
            ],
        ]);

        return view('catecismo', compact('perguntas'));
    }
}
