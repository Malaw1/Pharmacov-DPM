<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Suivi
 * 
 * @property int $id
 * @property Carbon $apparition_effet
 * @property Carbon $disparition_effet
 * @property string|null $readministration
 * @property string|null $reapparition
 * @property string|null $traitement_correcteur
 * @property string $suivi_patient
 * @property string $evolution
 * @property int $fiche_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Fich $fich
 *
 * @package App\Models
 */
class Suivi extends Model
{
	protected $table = 'suivis';

	protected $casts = [
		'fiche_id' => 'int'
	];

	protected $dates = [
		'apparition_effet',
		'disparition_effet'
	];

	protected $fillable = [
		'apparition_effet',
		'disparition_effet',
		'readministration',
		'reapparition',
		'traitement_correcteur',
		'suivi_patient',
		'evolution',
		'fiche_id'
	];

	public function fich()
	{
		return $this->belongsTo(Fich::class, 'fiche_id');
	}
}
