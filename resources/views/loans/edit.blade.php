@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-header">Editar Prestamo
                    
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              <form action=" {{ route('loans.update', $loan) }} " method="POST"  autocomplete="off"> 
                  
                 <div class="form-group">
                <label for="exampleFormControlSelect1">Cliente ID</label>
                  <select class="form-control" name="client_id" id="exampleFormControlSelect1">
                    
                    @foreach($clients as $client)
                      
                        <option value="{{$client->id}}" > {{$client->name}} </option>
                       
                    @endforeach

                  </select>
                </div>

                <div class="form-group">
                  @csrf
                  @method('PUT')
                  <input type="submit" value="Actualizar" class="btn btn-sm btn-primary">  
                </div>
              </form>
            </div>
         </div>
     </div>
 </div>
</div>
@endsection