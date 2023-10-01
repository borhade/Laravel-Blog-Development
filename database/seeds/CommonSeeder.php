<?php

use Illuminate\Database\Seeder;
use Faker\Factory ;
use App\Tag;
class CommonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $data = [
            "name"=>"History",
            "slug"=>"History",
            "description"=>"In June 2011, the studio released its first free-to-play mobile game,",
        ];

        Tag::create($data);
    }
}
