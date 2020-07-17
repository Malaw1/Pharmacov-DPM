<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $prenom
 * @property string $nom
 * @property string $specialite
 * @property string $telephone
 * @property string $structure
 * @property string $proffession
 * @property string $adresse
 * @property string $service
 * @property string $matricule
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'prenom',
		'nom',
		'specialite',
		'telephone',
		'structure',
		'proffession',
		'adresse',
		'service',
		'matricule',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];
}
