@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-around; align-items: center; border: 2px solid rgba(0,0,0,.2);"><h1>Prestamos</h1>
                    <a href=" {{route('loans.create')}} " class="btn btn-lg btn-primary">Crear Prestamo</a>
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
                                <a href=" {{route('loans.edit',$loan)}} " class="btn btn-sm btn-success">
                                    Editar
                                </a>
                            </td>
                            <td>
                                
                                <form action=" {{ route('loans.destroy', $loan) }} " method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <input type="submit" value="Eliminar" class="btn btn-sm btn-danger" onclick="return confirm('Si elimina este archivo se eliminan tambien en cascada los que usan como fk. Desea eliminar de todas formas?') ">
                                    

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