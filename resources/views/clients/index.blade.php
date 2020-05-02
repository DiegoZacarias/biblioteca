@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-around; align-items: center; border: 2px solid rgba(0,0,0,.2);"><h1>Clientes</h1>
                    <a href=" {{route('clients.create')}} " class="btn btn-lg btn-primary">Crear</a>
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
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Ruc</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th colspan="3">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                        <tr>
                            <td> {{$client->id}} </td>
                            <td> {{$client->name}} </td>
                            <td> {{$client->ruc}} </td>
                            <td> {{$client->email}} </td>
                            <td> {{$client->phone}} </td>
                            <td>
                                <a href=" {{route('clients.show',$client)}} " class="btn btn-sm btn-info">
                                    Mostrar
                                </a>
                            </td>
                            <td>
                                <a href=" {{route('clients.edit',$client)}} " class="btn btn-sm btn-success">
                                    Editar
                                </a>
                            </td>
                            <td>
                                
                                <form action=" {{ route('clients.destroy', $client) }} " method="POST">
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
