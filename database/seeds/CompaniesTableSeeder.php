<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        DB::table('companies')->truncate();
        
        $data = [];

        foreach (range(1,5) as $key => $value) {
            $data[] = [
                'id'=> $value,
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ];  
        }
        DB::table('companies')->insert($data);
        
    }
}