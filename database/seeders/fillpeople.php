<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fillpeople extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=50;$i++){
            DB::table('people')->insert(
                array(
                    'age'=>$i,
                    'gender'=>'Femenino',
                    'name'=>$i. ' '.'Carla',
                    'weight'=>$i * 2
                )

            );
        }
    }
}
