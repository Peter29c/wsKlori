<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class GrupoAlimenticioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupo_alimenticio')->insert([
            'nombre' => 'Grupo Alimenticio 1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
