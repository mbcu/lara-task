<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class CountryList extends Model
{
    use HasFactory;
	 protected $table="country_list";
	 protected $fillable = [
        'id',
        'name',
        'code',
    ];
	 public function users(){
		return this->hasMany(User::class,'country_id','id');
	 }
}
