<?php

namespace App\Business\Usuario;

// Facades
use App\Models\Usuario;
// Utils
use App\Utils\JwtToken;
use Illuminate\Support\Facades\Hash;

//Models

/**
 * Clase de negocios del usuario
 *
 * Created by Edewaldo Nuñez.
 * Date: 15 Jun 2020
 */
class GetPatients
{
    public function __invoke()
    {
        
        // Encuentra usuario de la base de datos
        $users = Usuario::where('admin', 0)->get();

        return $users;
    }
}
