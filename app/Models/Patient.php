<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Patient
 *
 * @property int $id
 * @property string $numero_dossier
 * @property string $initial
 * @property string $age
 * @property string $sexe
 * @property string $poids
 * @property string $taille
 * @property string|null $facteur_associe
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Patient extends Model
{
	protected $table = 'patients';

	protected $fillable = [
		'numero_dossier',
		'initial',
		'age',
		'sexe',
		'poids',
		'taille',
		'facteur_associe'
    ];

    public function fiche()
	{
		return $this->belongsTo(Fich::class, 'fiche_id');
	}
}
