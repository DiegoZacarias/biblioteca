


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Prestamo ID: {{$loan->id}} </h3>
                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


				<div class="jumbotron jumbotron-fluid">
 				 <div class="container">
 				 	<h1 class="display-4">Datos del cliente</h1>
 				   <p class="lead"><span style="font-weight: bold;">Nombre:</span> {{$loan->client->name}} </p>
 				   <p class="lead"><span style="font-weight: bold;">Ruc:</span> {{$loan->client->ruc}} </p>
 				   <p class="lead"><span style="font-weight: bold;">Email:</span> {{$loan->client->email}} </p>
 				   <p class="lead"><span style="font-weight: bold;">Telefono:</span> {{$loan->client->phone}} </p>
 				   <p class="lead"><span style="font-weight: bold;">Fecha de registro:</span> {{$loan->client->created_at->format('d/m/Y')}} </p>
				<!--   <h1 class="display-4">Fluid jumbotron</h1>
 				   <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
 				 </div>
				</div>


                <table class="table">
                    <thead>
                        <tr>
                            <th>Cont.</th>
                            <th>Codigo del Libro</th>
                            <th>Nombre del Libro</th>
                            <th>Autor</th>
                            <th>Fecha de retiro</th>
                            <th>Fecha de entrega</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($details as $detail)

                        <tr>
                        	<td> {{$detail->id}} </td>
                            <td> {{$detail->book->book_code}} </td>
                            <td> {{$detail->book->name}} </td>
                            <td> {{$detail->book->writer}} </td>
                            <td> {{$detail->from_date}} </td>
                            <td> {{$detail->to_date}} </td>
                            
                        </tr>
                        
                       @endforeach
                    </tbody>


                </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection