<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subject')->truncate();
        $data = [];
        $lang=[
            "C","C++","Java","Swift","JavaScript","Ruby","PHP","Python"
        ];
        $lang_url=[
            "lang_c.PNG","cpp_logo.png","java_logo.png","swift_logo.png","js_logo.png","ruby_logo.png","php_logo.png","python_logo.png"
        ];
        foreach ($lang as $key => $value){
            $data[] = [
                'id' => $key+1,
                'title' => $value,
                'lang' => $value,
                'img'=>$lang_url[$key],
                'detail'=>"これはテストデータです",
                'company_id' => 1,
            ];
        }
        foreach (range(count($lang)+1,count($lang)+10) as $value){
            $data[] = [
                'id' => $value,
                'title' => "課題".$value,
                'lang' => "なし",
                "img"=>"webtask.png",
                'detail'=>"これはテストデータです",
                'company_id' => 1,
            ];
        }

        DB::table('subject')->insert($data);

    }
}
