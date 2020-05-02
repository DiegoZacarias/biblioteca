@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-header">Editar registros del libro
                    
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              <form action=" {{ route('books.update', $book) }} " method="POST"  autocomplete="off"> 
                  
                <div class="form-group">
                  <label>Codigo del libro *</label>
                  <input type="text" name="book_code" class="form-control" required value="{{old('book_code',$book->book_code)}}">  
                </div>


                 <div class="form-group">
                <label for="exampleFormControlSelect1">Categoria</label>
                  <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                    
                    @foreach($categories as $category)
                      
                        <option value="{{$category->id}}" > {{$category->name}} </option>
                       
                    @endforeach

                  </select>
                </div>

                <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" name="name" class="form-control" required value=" {{old('name',$book->name)}}">  
                </div>

                <div class="form-group">
                  <label>Autor</label>
                  <input type="text" name="writer" class="form-control" required value="{{old('writer', $book->writer)}}">  
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