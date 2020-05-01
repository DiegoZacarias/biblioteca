@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-header">
                <h3> 
                Categoria: <span style="font-weight:bold"> {{$category->name}}</span>
                </h3>

            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              
                  
                <div class="form-group" style="font-size: large;">
                <p>  <span style="font-weight: bold"> Nombre:</span> {{$category->name}} </p><br>
                <p>   <span style="font-weight: bold"> Descripcion:</span> {{$category->description}} </p> <br>
                    
                    <a href=" {{route('categories.edit',$category)}} " class="btn btn-lg btn-primary">Editar</a>

                    <form action=" {{ route('categories.destroy', $category) }} " method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger" onclick="return confirm('Desea eliminar esta categoria?') ">
                                    

                                </form>


                </div>


                




              
            </div>
         </div>
     </div>
 </div>
</div>
@endsection