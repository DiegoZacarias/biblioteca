<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use App\Detail;
use App\Book;
use App\Client;

class ListController extends Controller
{
    public function index()
    {
    	//$loans_latest = Loan::latest()->get();
        $loans = Loan::all()->sortByDesc('id');
       // $loans = Loan::all(); //ORIGINAL
    	$details = Detail::all();
    	return view('list.index', compact('loans','details'));
    }


 

    public function show(Loan $loan)
    {
    	$client = Client::where('id','=',$loan->client_id)->get();
    	$details = Detail::where('loan_id','=',$loan->id)->get();


			foreach($details as $detail) {
					$fin=	$detail->id;
    	$books = Book::where('id','=',$fin)->get(); //COPIADO
			}

        //$books = Book::where('id','=',$fin)->get(); //ORIGINAL
    	

        //dd($fin);
    	

    	//dd($loan);
    	//dd($books);
    	//dd($client);
    	//dd($details);
    	return view('list.show', compact('loan','details','client','books'));
    }
}
