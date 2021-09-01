<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heros')->insert([
            
          ["presentation"=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente ipsum eaque tenetur officiis eveniet veritatis itaque necessitatibus, fuga voluptatibus quisquam, officia voluptate. Obcaecati libero accusantium, facilis nesciunt nulla necessitatibus in.",
            "img1"=>"/img/portfolio-details-1.jpg",
            
          

        ])
    }
}
