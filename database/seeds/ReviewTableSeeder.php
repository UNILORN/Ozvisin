<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        DB::table('review')->truncate();

        $data = [];

        foreach (range(1,10) as $value){
            $data[] = [
                'id'=>$value,
                "code_id"=>$value,
                "user_id"=>1,
                "company_id"=>1
            ];

        }

        DB::table('review')->insert($data);
    }
}
