<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'nom' => 'Ordinateurs Portables',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'nom' => 'Ordinateurs Fixes',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'nom' => 'Claviers',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'nom' => 'Souris',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
