@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Prestamos
                    <a href=" {{route('loans.create')}} " class="btn btn-sm btn-primary">Crear Prestamo</a>
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
                            
                            <th colspan="3">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($loans as $loan)
                        <tr>
                            <td> {{$loan->id}} </td>
                            <td> {{$loan->client->name}} </td>
                            <td> {{$loan->created_at}} </td>
                            
                            <td>
                                <a href=" {{route('loans.show',$loan)}} " class="btn btn-sm btn-info">
                                    Mostrar
                                </a>
                            </td>
                            <td>
                                <a href=" {{route('loans.edit',$loan)}} " class="btn btn-sm btn-primary">
                                    Editar
                                </a>
                            </td>
                            <td>
                                
                                <form action=" {{ route('loans.destroy', $loan) }} " method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <input type="submit" value="Eliminar" class="btn btn-sm btn-danger" onclick="return confirm('Desea eliminar este prestamo?') ">
                                    

                                </form>
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