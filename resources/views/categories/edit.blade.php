@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-header">Editar Categoria
                    
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              <form action=" {{ route('categories.update', $category) }} " method="POST"  autocomplete="off"> 
                  
                <div class="form-group">
                  <label>Nombre *</label>
                  <input type="text" name="name" class="form-control" required value="{{old('name',$category->name)}}">  
                </div>


                <div class="form-group">
                  <label>Descripcion</label>
                  <input type="text" name="description" class="form-control" required value="{{old('description',$category->description)}}">  
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