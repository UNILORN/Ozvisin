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
        DB::table('code')->truncate();
        $lang=[
            "C","C++","Java","Swift","JavaScript","Ruby","PHP","Python"
        ];
        DB::table('code')->truncate();
        $data = [];

        foreach ($lang as $key => $value) {
            foreach (range(1,10) as $valueaa){
                $data[] = [
                    'id' => $valueaa+(10*($key+1)),
                    'title' => $value." ができました見てください",
                    'URL' => "http://google.com",
                    'comment' => "コメントは＊＊です",
                    'user_id' => 1,
                    'subject_id' => $key+1
                ];
            }
        }
    DB::table('code')->insert($data);
        
    }
}
