<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
        [
            "fonction"=>"web designer",
            "description"=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem cupiditate quo repudiandae ipsa molestias sapiente praesentium repellendus perferendis quod doloribus animi corrupti amet officia nesciunt a velit, ullam ut.',
            "birthdhay"=>'09/03/1998',
            "website"=>'www.emxemple.com',
            "phone"=>"02762327328",
            "city"=>'bruxelles',
            "age"=>'28',
            'degree'=>'master',
            'email'=>'exemple@outlook.com',
            'freelance'=>'avaible',
            'descritpion_bis'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem cupiditate quo repudiandae ipsa molestias sapiente praesentium repellendus perferendis quod doloribus animi corrupti amet officia nesciunt a velit, ullam ut.',
        ],
        [
            "fonction"=>"plombier",
            "description"=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem cupiditate quo repudiandae ipsa molestias sapiente praesentium repellendus perferendis quod doloribus animi corrupti amet officia nesciunt a velit, ullam ut.',
            "birthdhay"=>'09/03/1999',
            "website"=>'www.emxemple.com',
            "phone"=>"02762327328",
            "city"=>'Bali',
            "age"=>'28',
            'degree'=>'master',
            'email'=>'exemple@outlook.com',
            'freelance'=>'avaible',
            'descritpion_bis'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem cupiditate quo repudiandae ipsa molestias sapiente praesentium repellendus perferendis quod doloribus animi corrupti amet officia nesciunt a velit, ullam ut.',
        ],
        [
            "fonction"=>"footballer",
            "description"=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem cupiditate quo repudiandae ipsa molestias sapiente praesentium repellendus perferendis quod doloribus animi corrupti amet officia nesciunt a velit, ullam ut.',
            "birthdhay"=>'09/03/1992',
            "website"=>'www.emxemple.com',
            "phone"=>"02762327328",
            "city"=>'bruxelles',
            "age"=>'30',
            'degree'=>'pro',
            'email'=>'exemple@outlook.com',
            'freelance'=>'avaible',
            'descritpion_bis'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem cupiditate quo repudiandae ipsa molestias sapiente praesentium repellendus perferendis quod doloribus animi corrupti amet officia nesciunt a velit, ullam ut.',
        ],
        [
            "fonction"=>"caissier",
            "description"=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem cupiditate quo repudiandae ipsa molestias sapiente praesentium repellendus perferendis quod doloribus animi corrupti amet officia nesciunt a velit, ullam ut.',
            "birthdhay"=>'09/03/1991',
            "website"=>'www.emxemple.com',
            "phone"=>"02762327328",
            "city"=>'bruxelles',
            "age"=>'21',
            'degree'=>'master',
            'email'=>'exemple@outlook.com',
            'freelance'=>'avaible',
            'descritpion_bis'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem cupiditate quo repudiandae ipsa molestias sapiente praesentium repellendus perferendis quod doloribus animi corrupti amet officia nesciunt a velit, ullam ut.',
        ],
            

    
        ]);
    }

}
