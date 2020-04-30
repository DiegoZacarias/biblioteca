<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public function books()
    {
    	return $this->belongsTo(Book::class);
    }

    public function loan()
    {
    	return $this->belongsTo(Loan::class);
    }
}
