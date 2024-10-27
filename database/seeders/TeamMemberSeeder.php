<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_members')->insert([
            [
                'name' => 'Ojenike Barnabas Ikechukwu',
                'slug' => 'ojenike-barnabas-ikechukwu',
                'title' => 'Director',
                'qualification' => 'BA Mission',
                'picture' => 'images/team/personplaceholder.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bigda Oum Rufus',
                'slug' => 'bigda-oum-rufus',
                'title' => 'Instructor',
                'qualification' => 'BA Mission',
                'picture' => 'images/team/personplaceholder.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bechem Manfred',
                'slug' => 'bechem-manfred',
                'title' => 'Instructor',
                'qualification' => 'BA Mission',
                'picture' => 'images/team/personplaceholder.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
