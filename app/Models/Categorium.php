<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorium
 * 
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * 
 * @property Collection|Producto[] $productos
 * @property Producto $producto
 *
 * @package App\Models
 */
class Categorium extends Model
{
	protected $table = 'categoria';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descripcion'
	];

	public function productos()
	{
		return $this->hasMany(Producto::class, 'categoria');
	}

	public function producto()
	{
		return $this->hasOne(Producto::class, 'id');
	}
}
