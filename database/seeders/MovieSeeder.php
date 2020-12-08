<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title'           => 'Spder-Man: Homecoming',
                'director'        => 'Jon Watts',
                'running_time'    => 133,
                'trailer_url'     => 'https://www.youtube.com/watch?v=n9DwoQ7HWvI',
                'producers'       => 'Kevin Feige, Amy Pascal',
                'starring'        => 'Tom Holland, Michael Keaton, Jon Favreau, Gwyneth Paltrow, Zendaya, Donald Glover, Jacob Batalon, Laura Harrier, Tony Revolori, Bokeem Woodbine, Tyne Daly, Marisa Tomei, Robert Downey Jr.',
                'screenplay_by'   => 'Jonathan Goldstein, John Francis Daley, Jon Watts, Christopher Ford, Chris McKenna, Erik Sommers',
                'story_by'   => 'Jonathan Goldstein, John Francis Daley',
                'distributed_by'   => 'Sony Pictures Releasing',
                'ticket_price'   => 150,
                'genre'   => 'Superhero',
                'language'   => 'English',
                'edited_by'   => 'Dan Lebental, Debbie Berman',
                'music_by'   => 'Michael Giacchino',
                'cinematography'   => 'Salvatore Totino',
                'synopsis'   => 'Spider-Man: Homecoming is a 2017 American superhero film based on the Marvel Comics character Spider-Man, co-produced by Columbia Pictures and Marvel Studios, and distributed by Sony Pictures Releasing. It is the second Spider-Man film reboot and the 16th film in the Marvel Cinematic Universe. The film was directed by Jon Watts, from a screenplay by the writing teams of Jonathan Goldstein and John Francis Daley, Watts and Christopher Ford, and Chris McKenna and Erik Sommers. Tom Holland stars as Peter Parker / Spider-Man, alongside Michael Keaton, Jon Favreau, Gwyneth Paltrow, Zendaya, Donald Glover, Jacob Batalon, Laura Harrier, Tony Revolori, Bokeem Woodbine, Tyne Daly, Marisa Tomei, and Robert Downey Jr. In Spider-Man: Homecoming, Peter Parker tries to balance high school life with being Spider-Man while facing the Vulture.'
            ],
            [
                'title'           => 'The Croods',
                'director'        => 'Kirk DeMicco, Chris Sanders',
                'running_time'    => 98,
                'trailer_url'     => 'https://www.youtube.com/watch?v=4fVCKy69zUY',
                'producers'       => 'Kristine Belson, Jane Hartwell',
                'starring'        => 'Nicolas Cage, Emma Stone, Ryan Reynolds, Catherine Keener, Clark Duke, Cloris Leachman, Randy Thom',
                'screenplay_by'   => 'Kirk DeMicco, Chris Sanders',
                'story_by'   => 'John Cleese, Kirk DeMicco, Chris Sanders',
                'distributed_by'   => '20th Century Fox',
                'ticket_price'   => 150,
                'genre'   => 'Animated',
                'language'   => 'English',
                'edited_by'   => 'Eric Dapkewicz, Darren T. Holmes',
                'music_by'   => 'Alan Silvestri',
                'cinematography'   => 'Salvatore Totino',
                'synopsis'   => 'The Croods is a 2013 American computer-animated adventure comedy film produced by DreamWorks Animation and distributed by 20th Century Fox. The film was written and directed by Kirk DeMicco and Chris Sanders, and stars the voices of Nicolas Cage, Emma Stone, Ryan Reynolds, Catherine Keener, Clark Duke, Cloris Leachman, and Randy Thom. The film is set in a fictional prehistoric Pliocene era known as "The Croodaceous" when a prehistoric caveman\'s position as a "Leader of the Hunt" is threatened by the arrival of a genius who comes up with revolutionary new inventions as they trek through a dangerous but exotic land in search of a new home. The film premiered at the 63rd Berlin International Film Festival on February 15, 2013, and was released in the United States on March 22, 2013. As part of the distribution deal, this was the first DreamWorks Animation film to be distributed by 20th Century Fox, since the end of their distribution deal with Paramount Pictures.'
            ],
            [
                'title'           => 'Train to Busan',
                'director'        => 'Yeon Sang-ho',
                'running_time'    => 118,
                'trailer_url'     => 'https://www.youtube.com/watch?v=pyWuHv2-Abk',
                'producers'       => 'Lee Dong-ha',
                'starring'        => 'Gong Yoo, Ma Dong-seok, Jung Yu-mi, Kim Su-an, Kim Eui-sung, Choi Woo-shik, Ahn So-hee',
                'screenplay_by'   => 'Kirk DeMicco, Chris Sanders',
                'story_by'   => 'Park Joo-suk',
                'distributed_by'   => 'Next Entertainment World',
                'ticket_price'   => 150,
                'genre'   => 'Horror',
                'language'   => 'Korean',
                'edited_by'   => 'Yang Jin-mo',
                'music_by'   => 'Jang Young-gyu',
                'cinematography'   => 'Lee Hyung-deok',
                'synopsis'   => 'Train to Busan is a 2016 South Korean action horror film directed by Yeon Sang-ho and starring Gong Yoo, Jung Yu-mi, and Ma Dong-seok. The film mostly takes place on a train to Busan as a zombie apocalypse suddenly breaks out in the country and threatens the safety of the passengers. The film premiered in the Midnight Screenings section of the 2016 Cannes Film Festival on 13 May. On 7 August, the film set a record as the first Korean film of 2016 to break the audience record of over 10 million theatergoers. The film serves as a reunion for Gong Yoo and Jung Yu-mi, who both starred in the 2011 film The Crucible. A sequel, Peninsula, was released in South Korea on July 15, 2020.'
            ],
            [
                'title'           => 'Pee Mak',
                'director'        => 'Banjong Pisanthanakun',
                'running_time'    => 115,
                'trailer_url'     => 'https://www.youtube.com/watch?v=B9xbj_UK1pc',
                'producers'       => 'Jira Maligool, Chenchonnee Suntonsaratoon, Suwimon Techasupinun, Pran Thadaweerawutar, Vanridee Pongsittisak',
                'starring'        => 'Mario Maurer, Davika Hoorne, Pongsathorn Jongwilas, Nattapong Chartpong, Auttarut Kongrasri, Kantapat Permpoonpatcharasook',
                'screenplay_by'   => 'Kirk DeMicco, Chris Sanders',
                'story_by'   => 'Nontra Khumvong, Banjong Pisanthanakun, Chantavit Dhanasevi',
                'distributed_by'   => 'GMM Tai Hub (Thailand), Intersolusindo Film (Indonesia), Golden Screen (Malaysia), Golden Village (Singapore), Panasia (Hongkong), Star Cinema (Philippines)',
                'ticket_price'   => 150,
                'genre'   => 'Comedy, Horror',
                'language'   => 'Thai',
                'edited_by'   => 'Tummarut Sumetsuppasok',
                'music_by'   => 'Chatchai Pongpraphaphan, Hualampong Riddim',
                'cinematography'   => 'Narupon Sohkkanapituk',
                'synopsis'   => 'Train to Busan is a 2016 South Korean action horror film directed by Yeon Sang-ho and starring Gong Yoo, Jung Yu-mi, and Ma Dong-seok. The film mostly takes place on a train to Busan as a zombie apocalypse suddenly breaks out in the country and threatens the safety of the passengers. The film premiered in the Midnight Screenings section of the 2016 Cannes Film Festival on 13 May. On 7 August, the film set a record as the first Korean film of 2016 to break the audience record of over 10 million theatergoers. The film serves as a reunion for Gong Yoo and Jung Yu-mi, who both starred in the 2011 film The Crucible. A sequel, Peninsula, was released in South Korea on July 15, 2020.'
            ],
            [
                'title'           => 'Jumanji',
                'director'        => 'Joe Johnston',
                'running_time'    => 104,
                'trailer_url'     => 'https://www.youtube.com/watch?v=8WaAUE4MXs8',
                'producers'       => 'Scott Kroopf, William Teitler',
                'starring'        => 'Robin Williams, Kirsten Dunst, David Alan Grier, Bonnie Hunt, Jonathan Hyde, Bebe Neuwirth',
                'screenplay_by'   => 'Jonathan Hensleigh, Greg Taylor, Jim Strain',
                'story_by'   => 'Greg Taylor, Jim Strain, Chris Van Allsburg',
                'distributed_by'   => 'Sony Pictures Releasing',
                'ticket_price'   => 150,
                'genre'   => 'Adventure',
                'language'   => 'English',
                'edited_by'   => 'Robert Dalva',
                'music_by'   => 'James Horner',
                'cinematography'   => 'Thomas E. Ackerman',
                'synopsis'   => 'Jumanji is a 1995 American fantasy adventure film directed by Joe Johnston. It is loosely based on the 1981 children\'s book by Chris Van Allsburg and the first installment of the Jumanji franchise. The film was written by Van Allsburg, Greg Taylor, Jonathan Hensleigh, and Jim Strain and stars Robin Williams, Kirsten Dunst, David Alan Grier, Bonnie Hunt, Jonathan Hyde, and Bebe Neuwirth. The story centers on a supernatural board game that releases jungle-based hazards upon its players with every turn they take. As a boy in 1969, Alan Parrish became trapped inside the game itself while playing with his friend Sarah Whittle. Twenty-six years later, siblings Judy and Peter Shepherd find the game, begin playing and then unwittingly release the now-adult Alan. After tracking down Sarah, the quartet resolves to finish the game in order to reverse all of the destruction it has caused.'
            ]
        ]);
    }
}
