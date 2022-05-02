<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $item = [
            'user_id' => 1,
            'post_id' => 1,
        ];
        DB::table('likes')->insert($item);
        $item = [
            'user_id' => 2,
            'post_id' => 2,
        ];
        DB::table('likes')->insert($item);
    }
}
