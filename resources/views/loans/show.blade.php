@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-header">
                <h3> 
                Prestamo de: <span style="font-weight:bold"> {{$loan->client->name}}</span>
                </h3>

            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              
                  
                <div class="form-group" style="font-size: large;">
                <p>  <span style="font-weight: bold"> ID DEL cliente:</span> {{$loan->client_id}} </p><br>
                    
                    <a href=" {{route('loans.edit',$loan)}} " class="btn btn-lg btn-primary">Editar</a>

                    <form action=" {{ route('loans.destroy', $loan) }} " method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger" onclick="return confirm('Desea eliminar este prestamo?') ">
                                    

                                </form>


                </div>


                




              
            </div>
         </div>
     </div>
 </div>
</div>
@endsection