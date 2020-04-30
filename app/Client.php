<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $fillable = [
        'name', 'ruc', 'email', 'phone',
    ];
    public function loans()
    {
    	return $this->hasMany(Loan::class);
    }
}
