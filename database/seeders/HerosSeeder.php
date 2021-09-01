<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heros')->insert([
            ["nom"=>"eric",
            "présentation"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis adipisci eum distinctio, culpa possimus quam fuga dolorem, cum laborum cumque modi ipsam. Error corrupti expedita aspernatur quam consectetur consequatur vitae.",
            ],
            ["nom"=>"marco",
            "présentation"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis adipisci eum distinctio, culpa possimus quam fuga dolorem, cum laborum cumque modi ipsam. Error corrupti expedita aspernatur quam consectetur consequatur vitae.",
            ],
            ["nom"=>"marc",
            "présentation"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis adipisci eum distinctio, culpa possimus quam fuga dolorem, cum laborum cumque modi ipsam. Error corrupti expedita aspernatur quam consectetur consequatur vitae.",
            ],
            ["nom"=>"jonathan",
            "présentation"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis adipisci eum distinctio, culpa possimus quam fuga dolorem, cum laborum cumque modi ipsam. Error corrupti expedita aspernatur quam consectetur consequatur vitae.",
            ],
        ]);
    }
}
