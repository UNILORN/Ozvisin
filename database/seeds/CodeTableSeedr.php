<?php

use Illuminate\Database\Seeder;

class CodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lang=[
            "C","C++","Java","Swift","JavaScript","Ruby","PHP","Python"
        ]
        DB::table('code')->truncate();
         $data = [];

        foreach (range(1,10) as $key => $value) {
            $data[] = [
                'id' => $value,
                'title' => str_random(100),
                'URL' => str_random(100),
                'comment' => str_random(10000),
                'user_id' => 1,
                'subject_id' => $value,
                'is_company_id' => str_random(10),
            ];  
        }
        foreach (range(11,17) as $key => $value) {
            $data[] = [
                'id' => $value,
                'title' => str_random(100),
                'URL' => str_random(100),
                'comment' => str_random(10000),
                'user_id' => 1,
                'subject_id' => $value,
                'is_company_id' => null,
            ];  
        }

DB::table('code')->insert($data);
        
    }
}
