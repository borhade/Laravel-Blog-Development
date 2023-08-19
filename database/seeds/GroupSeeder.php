<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\post;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= faker::create();
       for($i=0;$i<10;$i++){
            $data =[
                'content'=>$faker->paragraphs(6, true),
                'title'=>$faker->paragraphs(1, true),
                'user_id'=>$faker->randomNumber($nbDigits = 2, $strict = false),
            ];

            post::create($data);  
    }

        
    }
}
