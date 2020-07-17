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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Medicament[] $medicaments
 * @property Collection|Suivi[] $suivis
 *
 * @package App\Models
 */
class Fiche extends Model
{
	protected $table = 'fiches';

	protected $fillable = [
		'numero',
		'description',
		'antecedents',
		'pathologies'
	];

	public function medicaments()
	{
		return $this->hasMany(Medicament::class, 'fiche_id');
    }

    public function patient()
	{
		return $this->hasMany(Patient::class, 'fiche_id');
	}

	public function suivis()
	{
		return $this->hasMany(Suivi::class, 'fiche_id');
	}
}
