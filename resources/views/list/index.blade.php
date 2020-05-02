@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Listado de todos los prestamos con sus detalles respectivos</h3>
                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID Prestamo</th>
                            <th>Cliente</th>
                            <th>Creado el</th>
                            
                            <th>Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($loans as $loan)
                        <tr>
                            <td> {{$loan->id}} </td>
                            <td> {{$loan->client->name}} </td>
                            <td> {{$loan->created_at}} </td>
                            
                            <td>

                                <a href=" {{route('show',$loan)}} " class="btn btn-sm btn-success">
                                    Mostrar Detalles
                                </a>
                            </td>
                        
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