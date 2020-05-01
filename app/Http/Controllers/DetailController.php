<?php

namespace App\Http\Controllers;

use App\Detail;
use Illuminate\Http\Request;
use App\Http\Requests\DetailRequest;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Detail::all();

        return view ('details.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DetailRequest $request)
    {
/*$detail = Detail::create($request->all());
        return back()->with('status','Registro agregado con exito');*/

      /*  dd($request);*/
        //$venc = $hoy->wday+5;
        //date_add($hoy, date_interval_create_from_date_string("10 days"));

        $hoy = date('Y-m-d');
        


       //$venc= date("d-m-Y",strtotime($hoy."+ 7 days")); 
       $venc= date("Y-m-d",strtotime($hoy."+ 7 days")); 
        //dd($venc);



        $detail = Detail::create([
            'from_date'=> $hoy,
            'to_date' => $venc,



        ]+$request->all());
        return back()->with('status','Registro creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        return view('details.show',compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        return view ('details.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(DetailRequest $request, Detail $detail)
    {
        $detail->update($request->all());

        return back()->with('status', 'Registro actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        $detail->delete();
        return redirect('details')->with('status','Registro eliminado con exito');
    }
}
