@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-header">Nueva Categoria
                    
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              <form action=" {{route('categories.store')}} " method="POST" autocomplete="off"> 
                  

                <div class="form-group">
                  <label>Nombre *</label>
                  <input type="text" name="name" class="form-control" required>  
                </div>


                <div class="form-group">
                  <label>Descripcion</label>
                  <input type="text" name="description" class="form-control" required>  
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