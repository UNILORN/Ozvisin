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
        foreach (range(1,100) as $key => $value) {
            $data[] = [
                'id' => $value,
            'title' => str_random(10),
            'lang' => str_random(10),
            'company_id' => $value,
            ];  
        }
        DB::table('subject')->insert($data);

    }
}
