@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-header">Nuevo Cliente
                    
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              <form action=" {{route('clients.store')}} " method="POST" autocomplete="off"> 
                  

                <div class="form-group">
                  <label>Nombre *</label>
                  <input type="text" name="name" class="form-control" required>  
                </div>


                <div class="form-group">
                  <label>Ruc *</label>
                  <input type="text" name="ruc" class="form-control" required>  
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" required>  
                </div>

                <div class="form-group">
                  <label>Telefono</label>
                  <input type="text" name="phone" class="form-control" required>  
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