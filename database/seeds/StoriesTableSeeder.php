<?php

use App\Story;
use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Story::create(['title' => 'P.K. Subban thrills',
            'post' => 'He raises money for Montreal Childrens Hospital through jersey signing',
            'user_id' => '1']);

        Story::create(['title' => 'Idiots abound',
            'post' => 'Dorval mosque targeted by anti-refugee phone threat',
            'user_id' => '1']);
        
        Story::create(['title' => 'Kappa',
            'post' => 'El Kappa',
            'user_id' => '1']);
        Story::create(['title' => 'BAKA BAKA',
            'post' => 'BAKA BAKA BAKA BAKA BAKA BAKA BAKA BAKA BAKA BAKA',
            'user_id' => '1']);
        Story::create(['title' => 'Uguuu',
            'post' => 'Uguuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu',
            'user_id' => '1']);
        Story::create(['title' => 'Bored',
            'post' => 'Got nothing',
            'user_id' => '1']);
        Story::create(['title' => 'Luke I am your father',
            'post' => 'NOOOOOOOOOOOOOOOOO',
            'user_id' => '1']);
        Story::create(['title' => 'I am bored',
            'post' => 'Got nothing, really',
            'user_id' => '1']);
        Story::create(['title' => 'Idiots abound',
            'post' => 'Dorval mosque targeted by anti-refugee phone threat',
            'user_id' => '1']);
        Story::create(['title' => 'Hahaha',
            'post' => 'Sad Face',
            'user_id' => '1']);
        Story::create(['title' => 'P.K. Subban trade',
            'post' => 'RIP kids',
            'user_id' => '1']);

        Story::create(['title' => 'Dead',
            'post' => 'He dead',
            'user_id' => '1']);
        
        Story::create(['title' => 'Do something',
            'post' => 'Do not do it',
            'user_id' => '1']);
        Story::create(['title' => 'ONICHICHI',
            'post' => 'BAKA BAKA BAKA BAKA BAKA BAKA BAKA BAKA BAKA BAKA',
            'user_id' => '1']);
        Story::create(['title' => 'GAOOO',
            'post' => 'Uguuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu',
            'user_id' => '1']);
        Story::create(['title' => 'Boku no Pico',
            'post' => 'Pico to Chico',
            'user_id' => '1']);
        Story::create(['title' => 'Luke I am not your father',
            'post' => 'YES',
            'user_id' => '1']);
        Story::create(['title' => 'I am not bored',
            'post' => 'Got something to do, really',
            'user_id' => '1']);
        Story::create(['title' => 'AHO',
            'post' => 'Dumb idiots everywhere',
            'user_id' => '1']);
        Story::create(['title' => 'baka-senpai',
            'post' => 'please notice me',
            'user_id' => '1']);
    }

}
