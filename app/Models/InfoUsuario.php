<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InfoUsuario
 * 
 * @property int $idInfoUsuario
 * @property int $idUsuario
 * @property string $nombre
 * @property string $apellido
 * @property Carbon|null $fecha_nacimiento
 * @property string $genero
 * @property float $talla
 * @property int $ocupacion
 * @property float $estatura
 * @property string $antecedenteFamiliar
 * @property string $antecedentePersonal
 * @property string $medicamentos
 * @property string $objetivos
 * @property string $observaciones
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $idEstadoCivil
 * 
 * @property EstadoCivil $estado_civil
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class InfoUsuario extends Model
{
	use SoftDeletes;
	protected $table = 'info_usuario';
	protected $primaryKey = 'idInfoUsuario';

	protected $casts = [
		'idUsuario' => 'int',
		'talla' => 'float',
		'ocupacion' => 'int',
		'estatura' => 'float',
		'idEstadoCivil' => 'int'
	];

	protected $dates = [
		'fecha_nacimiento'
	];

	protected $fillable = [
		'idUsuario',
		'nombre',
		'apellido',
		'fecha_nacimiento',
		'genero',
		'talla',
		'ocupacion',
		'estatura',
		'antecedenteFamiliar',
		'antecedentePersonal',
		'medicamentos',
		'objetivos',
		'observaciones',
		'idEstadoCivil'
	];

	public function estado_civil()
	{
		return $this->belongsTo(EstadoCivil::class, 'idEstadoCivil');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'idUsuario');
	}
}
