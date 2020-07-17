<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notificateur
 * 
 * @property int $id
 * @property string $prenom
 * @property string $nom
 * @property string $email
 * @property string $fonction
 * @property string $structure
 * @property string $specialite
 * @property string $telephone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
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
		'structure',
		'specialite',
		'telephone'
	];
}
