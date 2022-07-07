<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fillcountry extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=50;$i++){
            DB::table('country')->insert(
                array(


                    'poblation'=>$i * 2000,
                    'continent'=>'Europa',
                    'name'=>'Islas Nuevas ' . $i,
                    'language'=>'Ruso'
                )

            );
        }
    }
}
