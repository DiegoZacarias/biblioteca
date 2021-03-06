<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
	protected $fillable = [
        'book_id', 'loan_id', 'from_date', 'to_date',
    ];
    public function book()
    {
    	return $this->belongsTo(Book::class);
    }

    public function loan()
    {
    	return $this->belongsTo(Loan::class);
    }
}
