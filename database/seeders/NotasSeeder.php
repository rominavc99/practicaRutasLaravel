<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
        
            'titulo' => 'Para que sirve Composer',
            'contenido' => 'sdsdsdsdssdsdsdd'
        ]);
    }
}
