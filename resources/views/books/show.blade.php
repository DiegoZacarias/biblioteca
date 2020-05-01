@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-header">
                <h3> 
                Datos del libro: <span style="font-weight:bold"> {{$book->name}}</span>
                </h3>

            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              
                  
                <div class="form-group" style="font-size: large;">
                <p>  <span style="font-weight: bold"> Nombre:</span> {{$book->name}} </p><br>
                 <p>  <span style="font-weight: bold"> Autor:</span> {{$book->writer}} </p><br>
                <p>   <span style="font-weight: bold"> Categoria:</span> {{$book->category->name}} </p> <br>
                <p>   <span style="font-weight: bold"> Codigo:</span> {{$book->book_code}}</p> <br>
                    
                    <a href=" {{route('books.edit',$book)}} " class="btn btn-lg btn-primary">Editar</a>

                    <form action=" {{ route('books.destroy', $book) }} " method="POST">
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