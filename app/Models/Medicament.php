<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
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
 * @property int $fiche_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Fich $fich
 *
 * @package App\Models
 */
class Medicament extends Model
{
	protected $table = 'medicaments';

	protected $casts = [
		'fiche_id' => 'int'
	];

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
		'date_fin_prise',
		'fiche_id'
	];

	public function fiche()
	{
		return $this->belongsTo(Fich::class, 'fiche_id');
	}
}
