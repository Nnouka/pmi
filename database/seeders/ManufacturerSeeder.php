<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturers')->insert([
            'name' => 'Derm Tech France',
            'address' => '210 avenue Aristide Briand',
            'zip_code' => 93320,
            'city' => 'Les Pavillons-sous-Bois',
            'email' => 'infos@derm-tech.com',
            'phone' => '+33(0)148026163',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
