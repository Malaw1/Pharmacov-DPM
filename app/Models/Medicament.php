<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicament
 * 
 * @property int $id
 * @property string $produit
 * @property string $voie
 * @property string $posologie
 * @property string $forme
 * @property string $dci
 * @property string $lot
 * @property string $fabricant
 * @property string|null $plante_medicinale
 * @property Carbon $date_prise
 * @property Carbon $date_fin_prise
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Fich[] $fiches
 *
 * @package App\Models
 */
class Medicament extends Model
{
	protected $table = 'medicaments';

	protected $dates = [
		'date_prise',
		'date_fin_prise'
	];

	protected $fillable = [
		'produit',
		'voie',
		'posologie',
		'forme',
		'dci',
		'lot',
		'fabricant',
		'plante_medicinale',
		'date_prise',
		'date_fin_prise'
	];

	public function fiches()
	{
		return $this->hasMany(Fich::class);
	}
}
