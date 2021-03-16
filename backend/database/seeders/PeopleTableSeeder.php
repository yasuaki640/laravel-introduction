<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'fumika',
            'mail' => 'fumika@gmail.com',
            'age' => '25',
            'created'
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'kayako',
            'mail' => 'kayako@gmail.com',
            'age' => '24'
        ];
        DB::table('people')->insert($param);
    }
}
