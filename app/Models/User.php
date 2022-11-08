<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\CountryList;
use App\Notifications\VerifyEmailQueued;
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

	  
    protected $fillable = [
        'name',
        'email',
        'password',
		  'country_id',
		  'birth'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
	 public function getCountry(){
			return $this->belongsTo(CountryList::class,'country_id');

	 }

	 /**
	* Send the queued email verification notification.
	*
	* @param  string  $token
	* @return void
	*/
	public function sendEmailVerificationNotification(){
		$this->notify(new VerifyEmailQueued);
	}	
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
