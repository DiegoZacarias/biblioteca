@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-header">Editar Detalle
                    
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              <form action=" {{ route('details.update', $detail) }} " method="POST"  autocomplete="off"> 
                  
                <div class="form-group">
                  <label>ID de libro *</label>
                  <input type="text" name="book_id" class="form-control" required value=" {{old('book_id',$detail->book_id)}} ">  
                </div>


                <div class="form-group">
                  <label>ID del prestamo *</label>
                  <input type="text" name="loan_id" class="form-control" required value=" {{old('loan_id',$detail->loan_id)}} ">  
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