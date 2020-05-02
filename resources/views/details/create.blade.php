@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-header">Nuevo Detalle de prestamo
                    
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              <form action=" {{route('details.store')}} " method="POST" autocomplete="off"> 

              <div class="form-group">
                <label for="exampleFormControlSelect1">ID de libro *</label>
                  <select class="form-control" name="book_id" id="exampleFormControlSelect1">
                    
                    @foreach($books as $book)
                      
                        <option value="{{$book->id}}" > {{$book->name}} </option>
                       
                    @endforeach

                  </select>
                </div>


                <div class="form-group">
                <label for="exampleFormControlSelect1">ID del prestamo *</label>
                  <select class="form-control" name="loan_id" id="exampleFormControlSelect1">
                    
                    @foreach($loans as $loan)
                      
                        <option value="{{$loan->id}}" >ID:{{$loan->id}}  Cliente:{{$loan->client->name}} </option>
                       
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