@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-header">
                <h3> 
                Datos del detalle del prestamo con ID: <span style="font-weight:bold"> {{$detail->loan_id}}</span>
                </h3>

            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              
                  
                <div class="form-group" style="font-size: large;">
                <p>  <span style="font-weight: bold"> ID de libro:</span> {{$detail->book_id}} </p><br>
                <p>   <span style="font-weight: bold"> ID del prestamo:</span> {{$detail->loan_id}} </p> <br>

                    <a href=" {{route('details.edit',$detail)}} " class="btn btn-lg btn-primary">Editar</a>

                    <form action=" {{ route('details.destroy', $detail) }} " method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger" onclick="return confirm('Desea eliminar este detalle?') ">
                                    

                                </form>


                </div>


                




              
            </div>
         </div>
     </div>


     @endsection