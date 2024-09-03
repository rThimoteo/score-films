<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OldItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movieID = Type::where('handler', 'movie')->first()->id;
        $serieID = Type::where('handler', 'serie')->first()->id;
        $cartoonID = Type::where('handler', 'cartoon')->first()->id;
        $animeID = Type::where('handler', 'anime')->first()->id;

        $completedID = Status::where('handler', 'done')->first()->id;
        $watchingID = Status::where('handler', 'consuming')->first()->id;

        $lastID = 0;
        $users = DB::table('users')->get();

        $contents = [
            [
                'name' => 'Senhor dos Anéis: A Sociedade do Anel',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/92/91/32/20224832.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2020-07-09',
                'has_parent' => false
            ],
            [
                'name' => 'Senhor dos Anéis: As Duas Torres',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/92/34/89/20194741.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2020-07-09',
                'has_parent' => true
            ],
            [
                'name' => 'Senhor dos Anéis: O Retorno do Rei',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/92/91/47/20224867.jpg',
                'score' => $this->newScore(5.5),
                'status' => $completedID,
                'date' => '2020-07-09',
                'has_parent' => true
            ],
            [
                'name' => 'Hobbit: Uma Jornada Inesperada',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/91/86/25/20180397.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2020-07-15',
                'has_parent' => false
            ],
            [
                'name' => 'Hobbit: A Desolação de Smaug',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/210/571/21057125_20131112201221324.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2020-07-15',
                'has_parent' => true
            ],
            [
                'name' => 'Hobbit: A Batalha dos Cinco Exércitos',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/14/12/09/15/31/492533.jpg',
                'score' => $this->newScore(5.5),
                'status' => $completedID,
                'date' => '2020-07-15',
                'has_parent' => true
            ],
            [
                'name' => 'Truque de Mestre',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/210/140/21014024_20130619225537406.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2020-07-17',
                'has_parent' => false
            ],
            [
                'name' => 'Truque de Mestre: O Segundo Ato',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/16/05/26/12/56/560738.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2020-07-17',
                'has_parent' => true
            ],
            [
                'name' => 'Piratas do Caribe: A Maldição do Pérola Negra',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/14/02/06/15/11/493568.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2020-07-21',
                'has_parent' => false
            ],
            [
                'name' => 'Piratas do Caribe: O Baú da Morte',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/94/12/24/20304627.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2020-07-21',
                'has_parent' => true
            ],
            [
                'name' => 'Piratas do Caribe: No Fim do Mundo',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/210/176/21017697_20130704202238456.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2020-07-21',
                'has_parent' => true
            ],
            [
                'name' => 'Piratas do Caribe: Navegando em Águas Misteriosas',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/33/06/20028706.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2020-07-21',
                'has_parent' => true
            ],
            [
                'name' => 'Piratas do Caribe: A Vingança de Salazar',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/17/03/02/16/02/262397.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2020-07-21',
                'has_parent' => true
            ],
            [
                'name' => 'Harry Potter e a Pedra Filosofal',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/95/59/60/20417256.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2020-08-10',
                'has_parent' => false
            ],
            [
                'name' => 'Harry Potter e a Câmara Secreta',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/93/01/50/20230712.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2020-08-10',
                'has_parent' => true
            ],
            [
                'name' => 'Harry Potter e o Prisioneiro de Azkaban',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/93/88/04/20282944.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2020-08-10',
                'has_parent' => true
            ],
            [
                'name' => 'Harry Potter e o Cálice de Fogo',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/93/87/95/20282862.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2020-08-10',
                'has_parent' => true
            ],
            [
                'name' => 'Harry Potter e a Ordem da Fênix',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/90/67/58/20107766.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2020-08-10',
                'has_parent' => true
            ],
            [
                'name' => 'Harry Potter e o Enigma do Príncipe',
                'type_id' => $movieID,
                'img_url' => 'https://upload.wikimedia.org/wikipedia/pt/b/b0/Harry_Potter_Half_Blood_Prince_2009.jpg',
                'score' => $this->newScore(3.5),
                'status' => $completedID,
                'date' => '2020-08-10',
                'has_parent' => true
            ],
            [
                'name' => 'Harry Potter e as Relíquias da Morte: Parte 1',
                'type_id' => $movieID,
                'img_url' => 'https://upload.wikimedia.org/wikipedia/pt/6/64/Harry_Potter_Deathly_Hallows_2010.jpg',
                'score' => $this->newScore(5.5),
                'status' => $completedID,
                'date' => '2020-08-10',
                'has_parent' => true
            ],
            [
                'name' => 'Harry Potter e as Relíquias da Morte: Parte 2',
                'type_id' => $movieID,
                'img_url' => 'https://upload.wikimedia.org/wikipedia/pt/thumb/3/3a/Harry_Potter_and_the_Deathly_Hallows_-_Part_2.jpg/250px-Harry_Potter_and_the_Deathly_Hallows_-_Part_2.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2020-08-10',
                'has_parent' => true
            ],
            [
                'name' => 'Jogos Famintos',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/210/477/21047794_20131009110820968.jpg',
                'score' => $this->newScore(2.5),
                'status' => $completedID,
                'date' => '2020-07-23',
                'has_parent' => false
            ],
            [
                'name' => 'Jogos Vorazes',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/87/35/87/20039778.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2020-07-29',
                'has_parent' => false
            ],
            [
                'name' => 'Jogos Vorazes: Em Chamas',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/210/473/21047331_201310071632457.jpg',
                'score' => $this->newScore(3.5),
                'status' => $completedID,
                'date' => '2020-07-29',
                'has_parent' => true
            ],
            [
                'name' => 'Jogos Vorazes: A Esperança - Parte 1',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/14/09/26/22/42/410634.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2020-07-29',
                'has_parent' => true
            ],
            [
                'name' => 'Jogos Vorazes: A Esperança - O Final',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/15/12/07/20/58/133341.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2020-07-29',
                'has_parent' => true
            ],
            [
                'name' => 'Sonic',
                'type_id' => $movieID,
                'img_url' => 'https://upload.wikimedia.org/wikipedia/pt/9/9f/Sonic_the_Hedgehog_2019.jpg',
                'score' => $this->newScore(1),
                'status' => $completedID,
                'date' => '2020-08-01',
                'has_parent' => false
            ],
            [
                'name' => 'Cinquenta Tons de Preto',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/16/02/22/13/12/507057.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2020-08-02',
                'has_parent' => false
            ],
            [
                'name' => 'Zumbilândia',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/90/21/81/20086182.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2020-08-20',
                'has_parent' => false
            ],
            [
                'name' => 'Zumbilândia - Atire Duas Vezes',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/19/08/09/14/20/5117880.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2020-08-20',
                'has_parent' => true
            ],
            [
                'name' => 'Alta Frequência',
                'type_id' => $movieID,
                'img_url' => 'https://images.justwatch.com/poster/280980467/s718/alta-frequencia.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2020-08-20',
                'has_parent' => false
            ],
            [
                'name' => 'Inatividade Paranormal',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/94/14/75/20420264.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2020-09-03',
                'has_parent' => false
            ],
            [
                'name' => 'As Crônicas de Nárnia - O Leão, a Feiticeira e o Guarda-Roupa',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/90/59/44/20103781.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2020-09-06',
                'has_parent' => false
            ],
            [
                'name' => 'As Crônicas de Nárnia - Príncipe Caspian',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/87/77/34/19961400.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2020-09-06',
                'has_parent' => true
            ],
            [
                'name' => 'As Crônicas de Nárnia - A Viagem do Peregrino da Alvorada',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/87/31/06/19874180.jpg',
                'score' => $this->newScore(2.5),
                'status' => $completedID,
                'date' => '2020-09-06',
                'has_parent' => true
            ],
            [
                'name' => 'Johnny English',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/14/01/24/16/12/016318.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2020-09-09',
                'has_parent' => false
            ],
            [
                'name' => 'O Retorno de Johnny English',
                'type_id' => $movieID,
                'img_url' => 'https://upload.wikimedia.org/wikipedia/pt/b/bf/Johnny_English_Reborn.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2020-09-09',
                'has_parent' => true
            ],
            [
                'name' => 'Johnny English 3.0',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/18/06/28/21/31/5797705.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2020-09-09',
                'has_parent' => true
            ],
            [
                'name' => 'Maze Runner: Correr ou Morrer',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/14/08/20/00/16/149160.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2020-09-20',
                'has_parent' => false
            ],
            [
                'name' => 'Maze Runner: Prova de Fogo',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/16/01/18/18/50/596680.jpg',
                'score' => $this->newScore(2.5),
                'status' => $completedID,
                'date' => '2020-09-20',
                'has_parent' => true
            ],
            [
                'name' => 'Maze Runner: A Cura Mortal',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/17/12/01/14/42/5070907.jpg',
                'score' => $this->newScore(2.5),
                'status' => $completedID,
                'date' => '2020-09-20',
                'has_parent' => true
            ],
            [
                'name' => 'O Procurado',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/20/95/19873128.jpg',
                'score' => $this->newScore(3.5),
                'status' => $completedID,
                'date' => '2020-09-22',
                'has_parent' => false
            ],
            [
                'name' => 'Scott Pilgrim Contra o Mundo',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/210/077/21007756_2013052223593443.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2020-09-24',
                'has_parent' => false
            ],
            [
                'name' => 'Steins;Gate: Fuka Ryouiki no Déjà vu',
                'type_id' => $movieID,
                'img_url' => 'https://images.justwatch.com/poster/34583639/s718/steins-gate-movie-fuka-ryouiki-no-deja-vu.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2020-10-05',
                'has_parent' => false
            ],
            [
                'name' => 'O Assassinato no Expresso do Oriente',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/17/09/20/21/02/2056130.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2020-10-06',
                'has_parent' => false
            ],
            [
                'name' => 'Projeto Almanaque',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/14/11/18/19/37/275486.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2020-10-07',
                'has_parent' => false
            ],
            [
                'name' => 'Dois Irmãos: Uma Jornada Fantástica',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/19/05/31/18/29/5627382.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2020-10-14',
                'has_parent' => false
            ],
            [
                'name' => 'John Wick: De Volta Ao Jogo',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/14/10/27/20/07/170589.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2020-10-21',
                'has_parent' => false
            ],
            [
                'name' => 'John Wick: Um Novo Dia Para Matar',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/17/01/10/15/05/404753.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2020-10-21',
                'has_parent' => true
            ],
            [
                'name' => 'John Wick: Parabellum',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/19/04/03/21/31/0977319.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2020-10-21',
                'has_parent' => true
            ],
            [
                'name' => 'Questão de Tempo',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/210/530/21053062_20131025204305591.jpg',
                'score' => $this->newScore(1),
                'status' => $completedID,
                'date' => '2020-10-22',
                'has_parent' => false
            ],
            [
                'name' => 'Corra',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/17/04/19/21/08/577190.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2020-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'A Entidade',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/91/31/38/20277419.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2020-11-16',
                'has_parent' => false
            ],
            [
                'name' => 'A Entidade 2',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/15/05/20/14/19/074831.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2020-11-16',
                'has_parent' => true
            ],
            [
                'name' => 'Coherence',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/14/04/17/16/57/109988.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2020-11-29',
                'has_parent' => false
            ],
            [
                'name' => 'Fuuka',
                'type_id' => $animeID,
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BMGQ4Mzk3NjktMmNiNS00ODk5LTg5NjMtYTRhYTkyYzkyN2I1L2ltYWdlXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2020-12-18',
                'has_parent' => false
            ],
            [
                'name' => 'Mulher Maravilha',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/17/03/10/19/41/580546.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-02-25',
                'has_parent' => false
            ],
            [
                'name' => 'Mulher Maravilha 1984',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/20/06/23/20/57/4275033.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-02-25',
                'has_parent' => true
            ],
            [
                'name' => 'A Viagem de Chihiro',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/210/527/21052756_20131024195513383.jpg',
                'score' => $this->newScore(3.5),
                'status' => $completedID,
                'date' => '2021-02-26',
                'has_parent' => false
            ],
            [
                'name' => 'Raya e o Último Dragão',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/20/10/20/20/41/4769094.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2021-03-09',
                'has_parent' => false
            ],
            [
                'name' => 'Fuja',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/20/02/21/07/43/5751122.jpg',
                'score' => $this->newScore(2.5),
                'status' => $completedID,
                'date' => '2021-04-09',
                'has_parent' => false
            ],
            [
                'name' => 'Code Geass: Lelouch of the Rebellion I – Initiation',
                'type_id' => $movieID,
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BODEyNWM0MmMtZmMwYS00Mzg0LTk1OTktYTI5MjFhNGIzNGNiXkEyXkFqcGdeQXVyODc0ODI0ODY@._V1_FMjpg_UX1000_.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2021-04-09',
                'has_parent' => false
            ],
            [
                'name' => 'Code Geass: Lelouch of the Rebellion II – Transgression ',
                'type_id' => $movieID,
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BYWRlYmIzYmMtYzlmOS00MmU2LTk1M2EtYmVlMjkxN2VhZWFmXkEyXkFqcGdeQXVyNjgwNTk4Mg@@._V1_FMjpg_UX1000_.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2021-04-09',
                'has_parent' => true
            ],
            [
                'name' => 'Code Geass: Lelouch of the Rebellion III – Glorification',
                'type_id' => $movieID,
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BODhlZDFlYjMtOTA2My00NjIwLWFiZDktMjJmYzIxNDU3ZDM2XkEyXkFqcGdeQXVyODAyNzczOTM@._V1_.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2021-04-09',
                'has_parent' => true
            ],
            [
                'name' => 'Code Geass: Lelouch of the Re;surrection',
                'type_id' => $movieID,
                'img_url' => 'https://upload.wikimedia.org/wikipedia/en/d/d3/Code_geass_lelouch_of_the_resurrection_key_visual.png',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2021-04-09',
                'has_parent' => true
            ],
            [
                'name' => 'Jogo Perigoso',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/17/09/26/09/05/4116756.jpg',
                'score' => $this->newScore(3.5),
                'status' => $completedID,
                'date' => '2021-04-10',
                'has_parent' => false
            ],
            [
                'name' => 'O Mistério das Duas Irmãs',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/35/68/19874655.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-04-11',
                'has_parent' => false
            ],
            [
                'name' => 'Poltergeist, O Fenômeno',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/15/03/12/15/18/072221.jpg',
                'score' => $this->newScore(2.5),
                'status' => $completedID,
                'date' => '2021-04-12',
                'has_parent' => false,
            ],
            [
                'name' => 'Hush - A Morte Ouve',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/16/03/14/15/43/333184.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-04-17',
                'has_parent' => false
            ],
            [
                'name' => 'Crepúsculo',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/87/02/32/19871201.jpg',
                'score' => $this->newScore(2.5),
                'status' => $completedID,
                'date' => '2021-04-22',
                'has_parent' => false
            ],
            [
                'name' => 'Crepúsculo, Lua Nova',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/89/73/19962668.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2021-04-22',
                'has_parent' => true
            ],
            [
                'name' => 'Crepúsculo, Eclipse',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/87/90/28/19962727.jpg',
                'score' => $this->newScore(1),
                'status' => $completedID,
                'date' => '2021-04-22',
                'has_parent' => true
            ],
            [
                'name' => 'Crepúsculo, Amanhecer, Parte I',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/91/89/20028742.jpg',
                'score' => $this->newScore(0.5),
                'status' => $completedID,
                'date' => '2021-04-22',
                'has_parent' => true
            ],
            [
                'name' => 'Crepúsculo, Amanhecer, Parte II',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/90/29/67/20181538.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2021-04-22',
                'has_parent' => true
            ],
            [
                'name' => 'Doce Vingança',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/91/76/19962877.jpg',
                'score' => $this->newScore(2.5),
                'status' => $completedID,
                'date' => '2021-04-24',
                'has_parent' => false
            ],
            [
                'name' => 'Doce Vingança 2',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/14/10/07/20/05/163014.png',
                'score' => $this->newScore(2.5),
                'status' => $completedID,
                'date' => '2021-04-24',
                'has_parent' => true
            ],
            [
                'name' => 'A Hora da Sua Morte',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/19/10/10/09/23/5441269.jpg',
                'score' => $this->newScore(1),
                'status' => $completedID,
                'date' => '2021-05-08',
                'has_parent' => false
            ],
            [
                'name' => 'A Mulher na Janela',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/19/12/19/20/45/2019215.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2021-05-21',
                'has_parent' => false
            ],
            [
                'name' => 'O Código Da Vinci',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/90/70/40/20109311.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-05-22',
                'has_parent' => false
            ],
            [
                'name' => 'O Espanta Tubarões',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/r_1280_720/medias/nmedia/18/35/23/52/18859351.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-05-28',
                'has_parent' => false
            ],
            [
                'name' => 'Robôs',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/16/90/19872714.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-06-02',
                'has_parent' => false
            ],
            [
                'name' => 'A Era Do Gelo',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/90/29/80/20109874.jpg',
                'score' => $this->newScore(1),
                'status' => $completedID,
                'date' => '2021-06-05',
                'has_parent' => false
            ],
            [
                'name' => 'Invocação do Mal',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/r_1280_720/medias/nmedia/18/97/25/23/20532535.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2021-06-22',
                'has_parent' => false
            ],
            [
                'name' => 'Invocação do Mal 2',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/pictures/16/04/18/20/43/025084.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2021-06-22',
                'has_parent' => true
            ],
            [
                'name' => 'Invocação do Mal 3',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/20/08/14/17/35/2504537.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2021-06-22',
                'has_parent' => true
            ],
            [
                'name' => 'Annabelle',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/14/08/11/21/32/336680.jpg',
                'score' => $this->newScore(5.5),
                'status' => $completedID,
                'date' => '2021-06-22',
                'has_parent' => false
            ],
            [
                'name' => 'Annabelle 2: A Criação do Mal',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/17/07/13/19/09/208315.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-06-22',
                'has_parent' => true
            ],
            [
                'name' => 'Annabelle 3: De Volta Para Casa',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/19/06/06/22/15/5719779.jpg',
                'score' => $this->newScore(5.5),
                'status' => $completedID,
                'date' => '2021-06-22',
                'has_parent' => true
            ],
            [
                'name' => 'A Freira',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/18/07/18/21/53/1348208.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2021-06-22',
                'has_parent' => false
            ],
            [
                'name' => 'A Casa Monstro',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/87/77/11/19965176.jpg',
                'score' => $this->newScore(3.5),
                'status' => $completedID,
                'date' => '2021-06-25',
                'has_parent' => false
            ],
            [
                'name' => 'Kill Bill - Volume 1',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/89/48/24/20122126.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-07-09',
                'has_parent' => false
            ],
            [
                'name' => 'Kill Bill - Volume 2',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/90/95/93/20122143.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-07-09',
                'has_parent' => true
            ],
            [
                'name' => 'Velozes e Furiosos',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/87/23/46/19873389.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2023-04-23',
                'has_parent' => false
            ],
            [
                'name' => '+ Velozes + Furiosos',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/90/03/20/20077808.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2023-04-24',
                'has_parent' => true
            ],
            [
                'name' => 'Velozes e Furiosos: Desafio em Tóquio',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/210/383/21038387_20130909201408304.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2023-04-28',
                'has_parent' => true
            ],
            [
                'name' => 'Velozes e Furiosos 4',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/210/445/21044501_2013092621313492.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2023-04-30',
                'has_parent' => true
            ],
            [
                'name' => 'Velozes e Furiosos 5: Operação Rio',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/34/17/20028727.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2023-05-01',
                'has_parent' => true
            ],
            [
                'name' => 'Velozes e Furiosos 6',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/92/81/46/20528636.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2023-05-14',
                'has_parent' => true
            ],
            [
                'name' => 'Velozes e Furiosos 7',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/14/10/28/09/55/394964.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2023-05-21',
                'has_parent' => true
            ],
            [
                'name' => 'Velozes e Furiosos 8',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/17/03/27/09/49/121118.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2023-05-25',
                'has_parent' => true
            ],
            [
                'name' => 'Velozes e Furiosos 9',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/04/14/19/06/3385237.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2023-05-28',
                'has_parent' => true
            ],
            [
                'name' => 'Velozes e Furiosos X',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/23/05/16/22/53/0156803.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2023-05-05',
                'has_parent' => true
            ],
            [
                'name' => 'Rua do Medo: 1994 - Parte 1 ',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/06/28/15/53/0645594.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2021-07-16',
                'has_parent' => false
            ],
            [
                'name' => 'Rua do Medo: 1978 - Parte 2',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/07/07/16/37/0992833.jpg',
                'score' => $this->newScore(5.5),
                'status' => $completedID,
                'date' => '2021-07-16',
                'has_parent' => true
            ],
            [
                'name' => 'Rua do Medo: 1666 - Parte 3',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/21/07/14/16/08/3726160.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2021-07-16',
                'has_parent' => true
            ],
            [
                'name' => 'Um Clássico Filme de Terror',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/06/21/12/39/2290548.jpg',
                'score' => $this->newScore(1),
                'status' => $completedID,
                'date' => '2021-07-17',
                'has_parent' => false
            ],
            [
                'name' => 'Um Lugar Silencioso',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/18/03/01/20/26/0577579.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-07-18',
                'has_parent' => false
            ],
            [
                'name' => 'Um Lugar Silencioso 2',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/07/07/00/23/1802515.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-07-18',
                'has_parent' => true
            ],
            [
                'name' => 'O Segredo Da Cabana',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/90/40/83/20235422.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2021-07-18',
                'has_parent' => false
            ],
            [
                'name' => 'Rogai Por Nós',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/r_1280_720/pictures/21/03/11/21/37/5359097.jpg',
                'score' => $this->newScore(1),
                'status' => $completedID,
                'date' => '2021-07-18',
                'has_parent' => false
            ],
            [
                'name' => 'Lenda Urbana',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/27/41/19873805.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-07-20',
                'has_parent' => false
            ],
            [
                'name' => 'O Pacote',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/18/07/16/13/53/5015999.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-07-21',
                'has_parent' => false
            ],
            [
                'name' => 'Eurotrip',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/87/06/95/19871703.jpg',
                'score' => $this->newScore(2.5),
                'status' => $completedID,
                'date' => '2021-07-22',
                'has_parent' => false
            ],
            [
                'name' => 'Premonição',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/93/48/60/20259212.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-07-27',
                'has_parent' => false
            ],
            [
                'name' => 'Premonição 2',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/96/53/60/20473803.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-07-27',
                'has_parent' => true
            ],
            [
                'name' => 'Premonição 3',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/19/58/19872987.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-07-27',
                'has_parent' => true
            ],
            [
                'name' => 'Premonição 4',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/89/40/19962635.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-07-27',
                'has_parent' => true
            ],
            [
                'name' => 'Premonição 5',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/92/12/20039774.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-07-27',
                'has_parent' => true
            ],
            [
                'name' => 'Night School',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/18/06/15/15/38/0683410.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2021-07-31',
                'has_parent' => false
            ],
            [
                'name' => 'Terror Nos Bastidores',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/15/09/09/13/34/130701.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-08-05',
                'has_parent' => false
            ],
            [
                'name' => 'Sexta Feira 13',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/15/03/10/20/18/175541.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2021-08-12',
                'has_parent' => false
            ],
            [
                'name' => 'Sexta-Feira 13 - Parte II',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/88/31/19962515.jpg',
                'score' => $this->newScore(1),
                'status' => $completedID,
                'date' => '2021-08-12',
                'has_parent' => true
            ],
            [
                'name' => 'O Diário de uma Virgem',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/14/11/24/20/30/030013.jpg',
                'score' => $this->newScore(1),
                'status' => $completedID,
                'date' => '2021-08-13',
                'has_parent' => false
            ],
            [
                'name' => 'O Homem Nas Trevas',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/16/05/23/22/33/115065.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-09-03',
                'has_parent' => false
            ],
            [
                'name' => 'O Homem Nas Trevas 2',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/21/06/30/19/07/0951479.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2021-09-03',
                'has_parent' => true
            ],
            [
                'name' => 'American Pie: A Primeira Vez é Inesquecível',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/87/29/95/19874065.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-09-09',
                'has_parent' => false
            ],
            [
                'name' => 'American Pie 2: A Segunda Vez é Ainda Melhor',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/86/97/35/19870686.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-09-09',
                'has_parent' => true
            ],
            [
                'name' => 'American Pie: O Casamento',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/75/15/19961175.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-09-09',
                'has_parent' => true
            ],
            [
                'name' => 'American Pie: O Reencontro',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/89/67/13/20074056.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-09-09',
                'has_parent' => true
            ],
            [
                'name' => 'American Pie Presents: Tocando a Maior Zona',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/86/94/38/19870368.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-09-09',
                'has_parent' => false
            ],
            [
                'name' => 'American Pie Presents: O Último Stifler Virgem',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/76/33/19961294.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-09-09',
                'has_parent' => false
            ],
            [
                'name' => 'American Pie Presents: Caindo em Tentação',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/90/21/82/20086183.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-09-09',
                'has_parent' => false
            ],
            [
                'name' => 'American Pie Presents: O Livro do Amor',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/90/21/87/20205725.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-09-09',
                'has_parent' => false
            ],
            [
                'name' => 'Divergente',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/14/02/18/21/20/583093.jpg',
                'score' => $this->newScore(3.5),
                'status' => $completedID,
                'date' => '2021-09-12',
                'has_parent' => false
            ],
            [
                'name' => 'Insurgente',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/15/01/28/19/22/096385.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2021-09-12',
                'has_parent' => true
            ],
            [
                'name' => 'Convergente',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/16/02/22/15/04/196967.jpg',
                'score' => $this->newScore(1),
                'status' => $completedID,
                'date' => '2021-09-12',
                'has_parent' => true
            ],
            [
                'name' => 'A Culpa é Das Estrelas',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/14/01/23/14/12/101764.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2021-09-16',
                'has_parent' => false
            ],
            [
                'name' => 'Todo Mundo em Pânico',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/87/28/03/19873867.jpg',
                'score' => $this->newScore(2.5),
                'status' => $completedID,
                'date' => '2021-09-15',
                'has_parent' => false
            ],
            [
                'name' => 'Todo Mundo em Pânico 2',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/87/19/51/19872980.jpg',
                'score' => $this->newScore(2.5),
                'status' => $completedID,
                'date' => '2021-09-15',
                'has_parent' => true
            ],
            [
                'name' => 'Todo Mundo em Pânico 3',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/87/20/89/20028647.jpg',
                'score' => $this->newScore(2.5),
                'status' => $completedID,
                'date' => '2021-09-15',
                'has_parent' => true
            ],
            [
                'name' => 'Jogos Mortais',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/06/15/19871623.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2021-09-22',
                'has_parent' => false
            ],
            [
                'name' => 'Jogos Mortais 2',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/94/44/32/20329257.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2021-09-22',
                'has_parent' => true
            ],
            [
                'name' => 'Jogos Mortais 3',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/94/46/88/20331546.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2021-09-22',
                'has_parent' => true
            ],
            [
                'name' => 'Jogos Mortais 4',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/80/59/19961734.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2021-09-22',
                'has_parent' => true
            ],
            [
                'name' => 'Round 6',
                'type_id' => $serieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/09/14/18/49/5442347.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2021-09-29',
                'has_parent' => false
            ],
            [
                'name' => 'Baywatch: S.O.S. Malibu',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/17/04/19/21/08/368743.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-09-29',
                'has_parent' => false
            ],
            [
                'name' => 'O Melhor Amigo',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/09/15/02/30/2269420.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2021-10-03',
                'has_parent' => false
            ],
            [
                'name' => 'Grand Blue',
                'type_id' => $animeID,
                'img_url' => 'https://static.anroll.net/images/animes/capas/grand-blue.jpg',
                'score' => $this->newScore(5.5),
                'status' => $completedID,
                'date' => '2021-10-09',
                'has_parent' => false
            ],
            [
                'name' => 'Sex Education',
                'type_id' => $serieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/19/01/03/10/55/2296345.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2021-10-20',
                'has_parent' => false
            ],
            [
                'name' => 'Army of the Dead: Invasão em Las Vegas',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/21/04/06/10/05/3052659.jpg',
                'score' => $this->newScore(3.5),
                'status' => $completedID,
                'date' => '2021-11-07',
                'has_parent' => false
            ],
            [
                'name' => 'Army of The Dead: Exército de Ladrões',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/02/22/10/08/3825767.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-11-07',
                'has_parent' => true
            ],
            [
                'name' => 'Capitão América: O Primeiro Vingador',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/87/34/62/19874544.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Capitão América 2: O Soldado Invernal',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/14/02/03/20/36/257136.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => true
            ],
            [
                'name' => 'Capitão América: Guerra Civil',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/16/03/10/20/36/363874.jpg',
                'score' => $this->newScore(1),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => true
            ],
            [
                'name' => 'Capitã Marvel',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/18/12/03/15/23/4670949.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Homem de Ferro',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/91/79/19/20163665.jpg',
                'score' => $this->newScore(5.5),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Homem de Ferro 2',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/31/07/19874181.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => true
            ],
            [
                'name' => 'Homem de Ferro 3',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/92/08/07/20488996.jpg',
                'score' => $this->newScore(3.5),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => true
            ],
            [
                'name' => 'O Incrível Hulk',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/pictures/210/485/21048566_20131010182211313.jpg',
                'score' => $this->newScore(2.5),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Thor',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/33/05/20028705.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Thor: O Mundo Sombrio',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/210/240/21024039_20130801212713895.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => true
            ],
            [
                'name' => 'Thor: Ragnarok',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/17/08/26/00/05/175443.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => true
            ],
            [
                'name' => 'Vingadores',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/89/43/82/20052140.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Vingadores: Era de Ultron',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/15/02/24/18/27/528824.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => true
            ],
            [
                'name' => 'Vingadores: Guerra Infinita',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/18/03/16/15/08/2019826.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => true
            ],
            [
                'name' => 'Vingadores: Ultimato',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/19/04/26/17/30/2428965.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => true
            ],
            [
                'name' => 'Guardiões da Galáxia',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/14/06/03/21/11/122582.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Guardiões da Galáxia Vol. 2',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/17/03/03/19/15/268212.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Homem-Formiga',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/15/05/06/15/31/443417.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Homem-Formiga e a Vespa',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/r_1280_720/pictures/18/06/25/21/02/1870998.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => true
            ],
            [
                'name' => 'Viúva Negra',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/r_1280_720/pictures/21/06/29/19/42/0211659.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Pantera Negra',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/17/12/07/16/09/2291532.jpg',
                'score' => $this->newScore(3.5),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Doutor Estranho',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/16/09/29/21/15/495786.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Eternos',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/08/19/10/48/2250523.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Zootopia',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/15/12/10/21/01/335612.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2021-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Era uma Vez em... Hollywood',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/19/08/06/21/50/5749668.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2021-11-14',
                'has_parent' => false
            ],
            [
                'name' => 'Your Name',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/17/10/04/19/01/4966397.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2021-11-14',
                'has_parent' => false
            ],
            [
                'name' => 'Alerta Vermelho',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/21/10/28/20/55/0671708.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2021-11-21',
                'has_parent' => false
            ],
            [
                'name' => 'Arcane',
                'type_id' => $serieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/11/16/14/35/2231192.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2021-12-01',
                'has_parent' => false
            ],
            [
                'name' => 'A Bruxa',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/pictures/16/02/02/11/51/346769.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2021-12-13',
                'has_parent' => false
            ],
            [
                'name' => 'O Expresso Polar',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/95/30/85/20395674.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2021-12-19',
                'has_parent' => false
            ],
            [
                'name' => 'Os Fantasmas de Scrooge',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/30/78/19874150.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2021-12-25',
                'has_parent' => false
            ],
            [
                'name' => 'Não Olhe Para Cima',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/21/12/06/21/17/3973076.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2021-12-26',
                'has_parent' => false
            ],
            [
                'name' => 'Matrix',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/91/08/82/20128877.JPG',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-01-23',
                'has_parent' => false
            ],
            [
                'name' => 'Matrix Reloaded',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/79/23/02/20073059.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-01-23',
                'has_parent' => true
            ],
            [
                'name' => 'Matrix Revolutions',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/63/51/33/18693370.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-01-23',
                'has_parent' => true
            ],
            [
                'name' => 'Matrix Resurrections',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/12/06/22/05/3298637.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-01-23',
                'has_parent' => true
            ],
            [
                'name' => 'Encanto',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/09/29/18/02/2861381.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-01-24',
                'has_parent' => false
            ],
            [
                'name' => 'Planeta dos Macacos: A Origem',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/35/38/19874625.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-02-06',
                'has_parent' => false
            ],
            [
                'name' => 'Kingsman: Serviço Secreto',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/15/03/03/22/36/487707.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-02-13',
                'has_parent' => false
            ],
            [
                'name' => 'Kingsman: O Círculo Dourado',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/17/08/29/22/19/252116.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-02-13',
                'has_parent' => true
            ],
            [
                'name' => 'Resident Evil: O Hóspede Maldito',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/14/05/23/21/44/398276.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-03-13',
                'has_parent' => false
            ],
            [
                'name' => 'Resident Evil 2: Apocalipse',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/18/51/19872875.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-03-13',
                'has_parent' => true
            ],
            [
                'name' => 'Resident Evil 3 - A Extinção',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/95/55/85/20414472.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-03-13',
                'has_parent' => true
            ],
            [
                'name' => 'Resident Evil 4: Recomeço',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/90/59/19962758.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-03-13',
                'has_parent' => true
            ],
            [
                'name' => 'Resident Evil 5: Retribuição',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/91/23/49/20135851.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-03-13',
                'has_parent' => true
            ],
            [
                'name' => 'Resident Evil 6: O Capítulo Final',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/16/11/21/13/55/091105.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-03-13',
                'has_parent' => true
            ],
            [
                'name' => 'Projeto Adam',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/22/03/02/17/11/3732338.png',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-03-27',
                'has_parent' => false
            ],
            [
                'name' => 'Escape Room',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/19/01/28/14/44/5612288.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-04-03',
                'has_parent' => false
            ],
            [
                'name' => 'Escape Room 2: Tensão Máxima',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/21/07/05/16/57/2096962.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-04-03',
                'has_parent' => true
            ],
            [
                'name' => 'Campo Do Medo',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/19/09/13/17/30/5654928.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-04-10',
                'has_parent' => false
            ],
            [
                'name' => '1922',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/20/05/28/06/32/5034552.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-04-10',
                'has_parent' => false
            ],
            [
                'name' => 'Escolha ou Morra',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/04/29/11/02/0489585.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-04-24',
                'has_parent' => false
            ],
            [
                'name' => 'O Poço',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/19/09/02/16/57/3762755.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-04-24',
                'has_parent' => false
            ],
            [
                'name' => 'O Lobo de Wall Street',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/13/12/30/18/11/111145.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-05-01',
                'has_parent' => false
            ],
            [
                'name' => 'As Vantagens De Ser Invisível',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/90/78/52/20295598.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-05-08',
                'has_parent' => false
            ],
            [
                'name' => 'Nós',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/19/02/07/14/16/5034340.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-06-04',
                'has_parent' => false
            ],
            [
                'name' => 'Jurassic World: O Mundo dos Dinossauros',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/15/04/22/16/28/291371.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-06-05',
                'has_parent' => false
            ],
            [
                'name' => 'Jurassic World: Reino Ameaçado',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/18/04/18/17/25/4723738.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-06-05',
                'has_parent' => true
            ],
            [
                'name' => 'Jurassic World: Domínio',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/04/15/22/05/1348210.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-06-05',
                'has_parent' => true
            ],
            [
                'name' => 'Eu Sei O Que Vocês Fizeram No Verão Passado',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/30/03/19874074.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-06-26',
                'has_parent' => false
            ],
            [
                'name' => 'A Ilha da Fantasia',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/20/03/04/18/49/4114138.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-06-26',
                'has_parent' => false
            ],
            [
                'name' => 'Em Ritmo de Fuga',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/17/07/10/19/10/576841.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-07-03',
                'has_parent' => false
            ],
            [
                'name' => 'Terror em Silent Hill',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/87/23/00/19873342.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-07-03',
                'has_parent' => false
            ],
            [
                'name' => 'Silent Hill: Revelação',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/92/64/10/20492994.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-07-03',
                'has_parent' => false
            ],
            [
                'name' => 'Lightyear',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/22/02/08/20/22/3222857.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-07-17',
                'has_parent' => false
            ],
            [
                'name' => 'Sword Art Online: Progressive Movie - Hoshi Naki Yoru no Aria',
                'type_id' => $movieID,
                'img_url' => 'https://static.anroll.net/images/filmes/capas/sword-art-online-progressive-movie-hoshi-naki-yoru-no-aria.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-07-24',
                'has_parent' => false
            ],
            [
                'name' => 'Além da Morte',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/17/08/10/18/03/563186.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-08-07',
                'has_parent' => false
            ],
            [
                'name' => 'A Órfã',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/87/29/90/19874059.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-09-04',
                'has_parent' => false
            ],
            [
                'name' => 'Órfã 2: A Origem',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/07/13/17/20/2336764.png',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-09-04',
                'has_parent' => true
            ],
            [
                'name' => 'O Telefone Preto',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/06/23/21/10/1998178.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-09-04',
                'has_parent' => false
            ],
            [
                'name' => 'Corrente do Mau',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/15/05/15/13/59/490314.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-09-10',
                'has_parent' => false
            ],
            [
                'name' => 'Ilha do Medo',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/30/04/19909653.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-09-10',
                'has_parent' => false
            ],
            [
                'name' => 'Não! Não Olhe!',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/08/03/22/02/1576547.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-09-11',
                'has_parent' => false
            ],
            [
                'name' => 'Stranger Things',
                'type_id' => $serieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/17/08/31/23/41/560893.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-09-12',
                'has_parent' => false
            ],
            [
                'name' => 'Deixe-me Entrar',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/33/48/19874429.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-09-18',
                'has_parent' => false
            ],
            [
                'name' => 'Jujutsu Kaisen 0',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/21/10/27/11/49/5430171.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-09-25',
                'has_parent' => false
            ],
            [
                'name' => 'Os Observadores',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/21/08/17/11/11/5648054.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-10-07',
                'has_parent' => false
            ],
            [
                'name' => 'Tower of God',
                'type_id' => $animeID,
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BZGM4NjE1OWYtNzcwMC00ZGY0LWE4NjEtZTgzYzY4YWU5M2E3XkEyXkFqcGdeQXVyMzI2Mjc1NjQ@._V1_FMjpg_UX1000_.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-10-08',
                'has_parent' => false
            ],
            [
                'name' => 'Animais Fantásticos e Onde Habitam',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/16/09/28/18/45/072693.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-10-09',
                'has_parent' => false
            ],
            [
                'name' => 'Avatar',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/30/40/20028676.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-10-13',
                'has_parent' => false
            ],
            [
                'name' => 'Avatar: O Caminho da Água',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/05/09/16/16/3197518.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-10-13',
                'has_parent' => true
            ],
            [
                'name' => 'O Massacre Da Serra Elétrica',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/93/03/26/20498578.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-10-16',
                'has_parent' => false
            ],
            [
                'name' => 'Sem Saída',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/02/24/20/02/0133460.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-10-17',
                'has_parent' => false
            ],
            [
                'name' => 'A Chave Mestra',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/03/05/19871276.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-10-23',
                'has_parent' => false
            ],
            [
                'name' => 'Interestelar',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/14/10/31/20/39/476171.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-11-06',
                'has_parent' => false
            ],
            [
                'name' => 'A Maldição da Residência Hill',
                'type_id' => $serieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/18/09/19/18/09/2669292.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-11-07',
                'has_parent' => false
            ],
            [
                'name' => 'Moonfall - Ameaça Lunar',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/22/01/04/09/58/1947183.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-11-13',
                'has_parent' => false
            ],
            [
                'name' => 'Bakemonogatari',
                'type_id' => $animeID,
                'img_url' => 'https://cdn.myanimelist.net/images/anime/11/75274.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-11-14',
                'has_parent' => false
            ],
            [
                'name' => 'Halloween',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/06/28/13/19/4959159.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-11-15',
                'has_parent' => false
            ],
            [
                'name' => 'Sorria',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/09/20/15/51/1507365.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-11-19',
                'has_parent' => false
            ],
            [
                'name' => 'Atividade Paranormal',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/89/84/20028680.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-11-20',
                'has_parent' => false
            ],
            [
                'name' => 'Cidade Das Sombras',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/bzp/01/129371.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-11-20',
                'has_parent' => false
            ],
            [
                'name' => 'A Lenda do Tesouro Perdido',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/91/76/60/20162465.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-11-25',
                'has_parent' => false
            ],
            [
                'name' => 'Sing - Quem Canta Seus Males Espanta',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/16/08/23/00/17/011755.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-11-26',
                'has_parent' => false
            ],
            [
                'name' => 'Klaus',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/19/10/09/17/03/0582059.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-12-11',
                'has_parent' => false
            ],
            [
                'name' => 'Valente',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/89/92/72/20126088.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-12-16',
                'has_parent' => false
            ],
            [
                'name' => 'O Homem Invisível',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/20/03/18/16/26/1054901.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-12-17',
                'has_parent' => false
            ],
            [
                'name' => 'Shazam',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/19/02/21/21/08/3735597.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-12-18',
                'has_parent' => false
            ],
            [
                'name' => 'Shazam: Fúria dos Deuses',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/23/03/07/17/53/2916495.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-05-07',
                'has_parent' => true
            ],
            [
                'name' => 'Adão Negro',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/09/28/21/19/3285240.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-12-19',
                'has_parent' => false
            ],
            [
                'name' => 'Porta dos Fundos: O Espírito do Natal',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/12/20/15/50/0121175.png',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-12-23',
                'has_parent' => false
            ],
            [
                'name' => 'O Estranho Mundo de Jack',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/90/48/68/20099172.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-12-24',
                'has_parent' => false
            ],
            [
                'name' => 'Glass Onion: Um Mistério Knives Out',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/22/09/08/18/28/2937738.png',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-12-25',
                'has_parent' => false
            ],
            [
                'name' => 'As Linhas Tortas de Deus',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/08/12/08/38/3329588.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2022-12-31',
                'has_parent' => false
            ],
            [
                'name' => 'X: A Marca da Morte',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/02/04/16/59/2837359.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-01-01',
                'has_parent' => false
            ],
            [
                'name' => 'Noites Brutais',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/22/06/24/09/48/0080946.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-01-01',
                'has_parent' => false
            ],
            [
                'name' => 'Shrek',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/91/54/04/20150812.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-01-07',
                'has_parent' => false
            ],
            [
                'name' => 'A Queda',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/22/10/04/19/16/5487644.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-01-08',
                'has_parent' => false
            ],
            [
                'name' => 'A Lenda de Candyman',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/06/28/20/19/5560670.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-01-14',
                'has_parent' => false
            ],
            [
                'name' => 'O Menu',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/22/08/17/22/25/2724945.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-01-15',
                'has_parent' => false
            ],
            [
                'name' => 'Brightburn - Filho das Trevas',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/r_1280_720/pictures/19/04/03/18/26/4286166.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-01-21',
                'has_parent' => false
            ],
            [
                'name' => 'O Babadook',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/14/01/23/02/58/013133.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-01-22',
                'has_parent' => false
            ],
            [
                'name' => 'Fresh',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/02/22/08/50/4291542.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-01-22',
                'has_parent' => false
            ],
            [
                'name' => 'M3GAN',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/10/11/19/20/4591973.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-01-29',
                'has_parent' => false
            ],
            [
                'name' => 'Apenas Um Show',
                'type_id' => $cartoonID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/14/06/05/12/20/022740.jpg',
                'score' => $this->newScore(null),
                'status' => $watchingID,
                'date' => '',
                'has_parent' => false
            ],
            [
                'name' => 'Eu Sou a Lenda',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/91/08/87/20128900.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-02-02',
                'has_parent' => false
            ],
            [
                'name' => 'Pulp Fiction - Tempo de Violência',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/16/32/19872655.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-02-03',
                'has_parent' => false
            ],
            [
                'name' => 'Sin City - A Cidade do Pecado',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/20/58/19873090.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-02-05',
                'has_parent' => false
            ],
            [
                'name' => 'A Mulher de Preto',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/87/35/37/20039772.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-02-11',
                'has_parent' => false
            ],
            [
                'name' => 'As Ruínas',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/66/26/23/18922984.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-02-11',
                'has_parent' => false
            ],
            [
                'name' => 'Os Inocentes',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/pictures/23/07/21/16/39/3091466.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-02-12',
                'has_parent' => false
            ],
            [
                'name' => 'Gato de Botas',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/89/67/23/20061404.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-11-27',
                'has_parent' => false
            ],
            [
                'name' => 'Duna',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/21/09/29/20/10/5897145.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-02-21',
                'has_parent' => false
            ],
            [
                'name' => 'Excluídos',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/23/02/24/16/02/1901553.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-02-26',
                'has_parent' => false
            ],
            [
                'name' => 'Prometheus',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/89/69/24/20125709.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-03-04',
                'has_parent' => false
            ],
            [
                'name' => 'A Forma da Água',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/17/11/28/18/40/3044833.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-03-05',
                'has_parent' => false
            ],
            [
                'name' => 'Game Of Thrones',
                'type_id' => $serieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/19/03/21/16/15/4239577.jpg',
                'score' => $this->newScore(null),
                'status' => $watchingID,
                'date' => '2023-03-12',
                'has_parent' => false
            ],
            [
                'name' => 'Rua Cloverfield, 10',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/16/03/24/18/41/117638.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-03-18',
                'has_parent' => false
            ],
            [
                'name' => 'A Última Casa da Rua',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/90/29/66/20195787.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-03-19',
                'has_parent' => false
            ],
            [
                'name' => 'Pânico',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/96/25/55/20455845.JPG',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2023-03-19',
                'has_parent' => false
            ],
            [
                'name' => 'Morte, Morte, Morte',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/09/30/21/09/3670495.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2023-03-26',
                'has_parent' => false
            ],
            [
                'name' => 'Feitiço',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/20/10/02/09/27/4336800.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2023-04-02',
                'has_parent' => false
            ],
            [
                'name' => 'À Espreita do Mal',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/21/04/01/18/11/5786055.jpg',
                'score' => $this->newScore(3.5),
                'status' => $completedID,
                'date' => '2023-04-08',
                'has_parent' => false
            ],
            [
                'name' => 'Kung Fu Panda',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/83/19/19962001.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2021-04-10',
                'has_parent' => false
            ],
            [
                'name' => 'Kung Fu Panda 2',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/91/51/19962850.jpg',
                'score' => $this->newScore(null),
                'status' => $completedID,
                'date' => '2021-04-10',
                'has_parent' => true
            ],
            [
                'name' => 'Kung Fu Panda 3',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/16/02/14/13/01/233818.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2023-04-09',
                'has_parent' => true
            ],
            [
                'name' => 'Neon Genesis Evangelion',
                'type_id' => $animeID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/18/12/07/12/40/4530128.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2023-04-16',
                'has_parent' => false
            ],
            [
                'name' => 'Ouija: O Jogo dos Espíritos',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/14/11/25/16/14/535714.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2023-04-24',
                'has_parent' => false
            ],
            [
                'name' => 'Ouija: Origem do Mal',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/pictures/16/06/23/18/55/294204.jpg',
                'score' => $this->newScore(3.5),
                'status' => $completedID,
                'date' => '2023-07-09',
                'has_parent' => true
            ],
            [
                'name' => 'Pearl: Uma História de Origem',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/07/25/20/34/1901466.jpg',
                'score' => $this->newScore(1),
                'status' => $completedID,
                'date' => '2023-05-05',
                'has_parent' => false
            ],
            [
                'name' => 'Super Mario Bros.',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/23/04/03/19/45/2854005.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2023-05-20',
                'has_parent' => false
            ],
            [
                'name' => 'A Morte do Demônio: A Ascenção',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/23/04/14/21/50/1023913.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2023-05-20',
                'has_parent' => false
            ],
            [
                'name' => 'Hereditário',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/18/06/14/13/11/1751062.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2023-06-03',
                'has_parent' => false
            ],
            [
                'name' => 'O Castelo Animado',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/15/03/26/16/44/393405.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2023-06-05',
                'has_parent' => false
            ],
            [
                'name' => 'Django Livre',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/90/07/53/20391069.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2023-06-06',
                'has_parent' => false
            ],
            [
                'name' => 'Hormônios à Flor da Pele',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/23/05/23/19/38/1420157.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2023-06-11',
                'has_parent' => false
            ],
            [
                'name' => 'The Last Of Us',
                'type_id' => $serieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/22/11/30/19/53/5856320.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2023-06-12',
                'has_parent' => false
            ],
            [
                'name' => 'Mama',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/93/35/86/20369169.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2023-06-24',
                'has_parent' => false
            ],
            [
                'name' => 'Transformers',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/21/20/19873157.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2023-06-13',
                'has_parent' => false
            ],
            [
                'name' => 'Transformers: A Vingança dos Derrotados',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/89/11/19962603.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2023-06-14',
                'has_parent' => true
            ],
            [
                'name' => 'Transformers: O Lado Oculto da Lua',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/medias/nmedia/18/87/34/05/20028725.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2023-06-15',
                'has_parent' => true
            ],
            [
                'name' => 'Transformers: A Era da Extinção',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/14/06/20/23/27/478475.jpg',
                'score' => $this->newScore(3.5),
                'status' => $completedID,
                'date' => '2023-06-25',
                'has_parent' => true
            ],
            [
                'name' => 'Transformers: O Último Cavaleiro',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/17/06/12/10/07/308660.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2023-07-02',
                'has_parent' => true
            ],
            [
                'name' => 'Suzume No Tojimari',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/23/04/06/19/24/2438297.jpg',
                'score' => $this->newScore(6),
                'status' => $completedID,
                'date' => '2023-07-16',
                'has_parent' => false
            ],
            [
                'name' => 'Descida ao Inferno',
                'type_id' => $movieID,
                'img_url' => 'https://www.themoviedb.org/t/p/w116_and_h174_face/o9oIqWFKcZirEDzjj6Ie92G60j0.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2023-07-30',
                'has_parent' => false
            ],
            [
                'name' => 'Bird Box: Barcelona',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/23/07/05/20/01/4116615.jpg',
                'score' => $this->newScore(3),
                'status' => $completedID,
                'date' => '2023-08-12',
                'has_parent' => false
            ],
            [
                'name' => 'Homem-Aranha no Aranhaverso',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/18/12/05/16/28/3718855.jpg',
                'score' => $this->newScore(5.5),
                'status' => $completedID,
                'date' => '2023-06-04',
                'has_parent' => false
            ],
            [
                'name' => 'Homem-Aranha: Através do Aranhaverso',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/c_310_420/pictures/23/05/17/22/43/4869322.jpg',
                'score' => $this->newScore(5),
                'status' => $completedID,
                'date' => '2023-08-13',
                'has_parent' => true
            ],
            [
                'name' => 'Um Contratempo',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/16/11/18/11/16/356441.jpg',
                'score' => $this->newScore(3.5),
                'status' => $completedID,
                'date' => '2023-09-02',
                'has_parent' => false
            ],
            [
                'name' => 'Sobrenatural',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img2.acsta.net/medias/nmedia/18/87/35/24/19874611.jpg',
                'score' => $this->newScore(1.5),
                'status' => $completedID,
                'date' => '2023-08-20',
                'has_parent' => false
            ],
            [
                'name' => 'Sobrenatural: Capítulo 2',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/210/439/21043936_20130925153204056.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2023-08-28',
                'has_parent' => true
            ],
            [
                'name' => 'Sobrenatural A Origem',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/15/04/03/01/29/028567.jpg',
                'score' => $this->newScore(2),
                'status' => $completedID,
                'date' => '2023-09-03',
                'has_parent' => true
            ],
            [
                'name' => 'Sobrenatural: A Última Chave',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/c_310_420/pictures/17/12/22/19/07/0542355.jpg',
                'score' => $this->newScore(4),
                'status' => $completedID,
                'date' => '2023-09-16',
                'has_parent' => true
            ],
            [
                'name' => 'Sobrenatural: A Porta Vermelha',
                'type_id' => $movieID,
                'img_url' => 'https://br.web.img3.acsta.net/pictures/23/04/18/18/01/0191060.jpg',
                'score' => $this->newScore(4.5),
                'status' => $completedID,
                'date' => '2023-09-25',
                'has_parent' => true
            ]
        ];

        foreach ($contents as $content) {
            $content['parent_id'] = null;

            if ($content['has_parent']) {
                $content['parent_id'] = $lastID;
            }
            
            $itemId = DB::table('items')->insertGetId([
                'name' => $content['name'],
                'type_id' => $content['type_id'],
                'img_url' => $content['img_url'],
                'parent_id' => $content['parent_id'],
            ]);

            foreach ($users as $user) {
                DB::table('user_item')->insert([
                    'user_id' => $user->id,
                    'item_id' => $itemId,
                    'score' => $content['score'],
                    'status_id' => $content['status'],
                    'date' => $content['date'],
                ]);
            }
            $lastID = $itemId;
          }
    }

    public function newScore($score): int | null
    {
        if ($score > 0) {
            return round(($score * 10) / 6);
        }
        return null;
    }
}
