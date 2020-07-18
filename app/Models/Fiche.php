<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Fich
 *
 * @property int $id
 * @property string $numero
 * @property string $description
 * @property string|null $antecedents
 * @property string $pathologies
 * @property int $patient_id
 * @property int $medicament_id
 * @property int $notificateur_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Medicament $medicament
 * @property Notificateur $notificateur
 * @property Patient $patient
 * @property Collection|Suivi[] $suivis
 *
 * @package App\Models
 */
class Fiche extends Model
{
	protected $table = 'fiches';

	protected $casts = [
		'patient_id' => 'int',
		'medicament_id' => 'int',
		'notificateur_id' => 'int'
	];

	protected $fillable = [
		'numero',
		'description',
		'antecedents',
		'pathologies',
		'patient_id',
		'medicament_id',
		'notificateur_id'
	];

	public function medicament()
	{
		return $this->belongsTo(Medicament::class);
	}

	public function notificateur()
	{
		return $this->belongsTo(Notificateur::class);
	}

	public function patient()
	{
		return $this->belongsTo(Patient::class);
	}

	public function suivis()
	{
		return $this->hasMany(Suivi::class, 'fiche_id');
	}
}
