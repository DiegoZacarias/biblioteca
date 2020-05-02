@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-header">Nuevo Prestamo <br><small>*Por favor acuerdese del cliente que elije, para luego llamarlo en el detalle*</small>
                    
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              <form action=" {{route('loans.store')}} " method="POST" autocomplete="off"> 

           <!--     <div class="form-group">
                  <label>Id cliente</label>
                  <input type="text" name="client_id" class="form-control" required>  
                </div>
            -->
                <div class="form-group">
                <label for="exampleFormControlSelect1">Id cliente</label>
                  <select class="form-control" name="client_id" id="exampleFormControlSelect1">
                    
                    @foreach($clients as $client)
                      
                        <option value="{{$client->id}}" > {{$client->name}} </option>
                       
                    @endforeach

                  </select>
                </div>

                <div class="form-group">
                  @csrf
                  <input type="submit" value="Agregar" class="btn btn-sm btn-primary">  
                </div>
              </form>

            </div>
         </div>
     </div>
 </div>
</div>
@endsection