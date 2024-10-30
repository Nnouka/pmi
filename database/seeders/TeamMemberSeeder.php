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
                'title' => 'Director General',
                'qualification' => 'BA Mission',
                'picture' => 'images/team/ojenike-barnabas.jpg',
                'caption' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dani Chudier Lul Kuar',
                'slug' => 'dani-chudier-lul-kuar',
                'title' => 'International Adminstrator',
                'caption' => 'Administrative Council Member',
                'qualification' => 'BA Mission',
                'picture' => 'images/team/dan-chudier.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bigda Oum Rufus',
                'slug' => 'bigda-oum-rufus',
                'title' => 'Board of Trustees Chairman',
                'caption' => 'Administrative Council Member',
                'qualification' => 'BA Mission',
                'picture' => 'images/team/bigda-oum.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tina Angel Barnabas',
                'slug' => 'tian-angel-barnabas',
                'title' => 'Women International Coordinator',
                'qualification' => 'BA Mission',
                'picture' => 'images/team/tina-angel.jpg',
                'caption' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Richard Afuma',
                'slug' => 'richard-afuma',
                'title' => 'Administrative Council Member',
                'caption' => 'Administrative Council Member',
                'qualification' => 'BA Mission',
                'picture' => 'images/team/richard-afuma.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ella Bryant',
                'slug' => 'ella-bryant',
                'title' => 'Secretary General',
                'qualification' => 'BA Mission',
                'picture' => 'images/team/ella-bryant.jpg',
                'caption' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
