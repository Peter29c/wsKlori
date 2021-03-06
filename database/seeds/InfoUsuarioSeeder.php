<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class InfoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuariosInfo = [
             [
                'idUsuario' => 1,
                'nombre' => 'Admin',
                'apellido' => 'Uno',
                'genero' => 'H',
                'talla' => 7.2,
                'fecha_nacimiento' => Carbon::now()->format('Y-m-d'),
                'ocupacion' => 1,
                'estatura' => 1.80,
                'idEstadoCivil' => 1,
                'antecedenteFamiliar' => Str::random(30),
                'antecedentePersonal' => Str::random(30),
                'medicamentos' => Str::random(30),
                'objetivos' => Str::random(30),
                'observaciones' => Str::random(30),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'idUsuario' => 2,
                'nombre' => 'Usuario',
                'apellido' => 'Uno',
                'genero' => 'M',
                'talla' => 5.2,
                'fecha_nacimiento' => Carbon::now()->format('Y-m-d'),
                'ocupacion' => 1,
                'estatura' => 1.65,
                'idEstadoCivil' => 1,
                'antecedenteFamiliar' => Str::random(30),
                'antecedentePersonal' => Str::random(30),
                'medicamentos' => Str::random(30),
                'objetivos' => Str::random(30),
                'observaciones' => Str::random(30),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        foreach ($usuariosInfo as $uI) {
            DB::table('info_usuario')->insert([
                'idUsuario' => $uI['idUsuario'],
                'nombre' => $uI['nombre'],
                'apellido' => $uI['apellido'],
                'genero' => $uI['genero'],
                'talla' => $uI['talla'],
                'fecha_nacimiento' => $uI['fecha_nacimiento'],
                'ocupacion' => $uI['ocupacion'],
                'estatura' => $uI['estatura'],
                'idEstadoCivil' => $uI['idEstadoCivil'],
                'antecedenteFamiliar' => $uI['antecedenteFamiliar'],
                'antecedentePersonal' => $uI['antecedentePersonal'],
                'medicamentos' => $uI['medicamentos'],
                'objetivos' => $uI['objetivos'],
                'observaciones' => $uI['observaciones'],
                'created_at' => $uI['created_at']
            ]);
        }
    }
}
