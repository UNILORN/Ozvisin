<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create('ja_JP');
    	DB::table('users')->truncate();
        
        $data = [];
        $data[] = [
            'id'=>1,
            'name' => "admin",
            'email' => "admin@admin.admin",
            'password' => bcrypt('admin'),
        ];

        DB::table('users')->insert($data);
        
    }
}