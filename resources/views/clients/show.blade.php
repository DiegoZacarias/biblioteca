@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-header">
                <h3> 
                Datos del cliente con nombre: <span style="font-weight:bold"> {{$client->name}}</span>
                </h3>

            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              
                  
                <div class="form-group" style="font-size: large;">
                <p>  <span style="font-weight: bold"> Nombre:</span> {{$client->name}} </p><br>
                <p>   <span style="font-weight: bold"> Ruc:</span> {{$client->ruc}} </p> <br>
                 <p>  <span style="font-weight: bold"> Email:</span> {{$client->email}} </p><br>
                <p>   <span style="font-weight: bold"> Phone:</span> {{$client->phone}}</p> <br>
                    
                    <a href=" {{route('clients.edit',$client)}} " class="btn btn-lg btn-primary">Editar</a>

                    <form action=" {{ route('clients.destroy', $client) }} " method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger" onclick="return confirm('Desea eliminar este cliente?') ">
                                    

                                </form>


                </div>


                




              
            </div>
         </div>
     </div>
 </div>
</div>
@endsection