<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $id
 * @property string $nombre
 * @property int $precio
 * @property int $categoria
 * @property string $descripcion
 * @property string $imagen
 * 
 * @property Categorium $categorium
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'producto';
	public $timestamps = false;

	protected $casts = [
		'precio' => 'int',
		'categoria' => 'int'
	];

	protected $fillable = [
		'nombre',
		'precio',
		'categoria',
		'descripcion',
		'imagen'
	];

	public function categorium()
	{
		return $this->belongsTo(Categorium::class, 'id');
	}
}
