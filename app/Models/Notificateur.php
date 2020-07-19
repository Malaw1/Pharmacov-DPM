<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notificateur
 *
 * @property int $id
 * @property string $prenom
 * @property string $nom
 * @property string $email
 * @property string $fonction
 * @property string $adresse_structure
 * @property string $structure
 * @property string $specialite
 * @property string $telephone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Fiche[] $fiches
 *
 * @package App\Models
 */
class Notificateur extends Model
{
	protected $table = 'notificateurs';

	protected $fillable = [
		'prenom',
		'nom',
		'email',
		'fonction',
		'adresse_structure',
		'structure',
		'specialite',
		'telephone'
	];

	public function fiches()
	{
		return $this->hasMany(Fiche::class);
	}
}
