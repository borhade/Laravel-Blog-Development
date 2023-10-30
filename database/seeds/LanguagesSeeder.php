<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Language;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1;$i<8;$i++){
            $details = [
                "name"=>$faker->text(),
                "released_year"=>date('Y'),
                "githut_rank"=>rand(1,100),
                "pypl_rank"=>rand(1,100),
                "tiobe_rank"=>rand(1,100),
                "created_at"=>$faker->datetime(),
                "created_at"=>$faker->datetime(),
            ];
            Language::create($details);
        }        
    }
}
