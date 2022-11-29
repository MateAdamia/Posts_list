<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title'=>'Chestnut',
            'body'=>"When you're suffering, that's when you're most real.",
            'author'=>'The Man in Black',
            'active'=>0,
           



        ]);
      
    }
}
