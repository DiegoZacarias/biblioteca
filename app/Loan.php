<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public function client()
    {
    	return $this->belongsTo(Client::class);
    }

    public function details()
    {
    	return $this->hasMany(Detail::class);
    }
}
