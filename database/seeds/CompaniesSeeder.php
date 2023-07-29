<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
Use App\Company;
class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
         for($i=0;$i<5;$i++){
            $data =[
                "company_name"=>"test",
                "email"=>$faker->email,
                "address"=>$faker->address
            ];

         Company::create($data);
    }


    }
}
