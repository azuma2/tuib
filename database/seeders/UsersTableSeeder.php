<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $item = [
        'id' => '1',
        'name' => 'aa',
        'email' => 'aaaaaaaa@mail.com',
        'password' => 'zzzzzz',
        ];
        DB::table('users')->insert($item);
        $item = [
        'id' => '2',
        'name' => 'aa2',
        'email' => 'aaaaaaaa2@mail.com',
        'password' => 'zzzzzz',
        ];
        DB::table('users')->insert($item);
    
    }
}
