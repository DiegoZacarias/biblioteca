@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-around; align-items: center; border: 2px solid rgba(0,0,0,.2);"><h1>Detalles de los prestamos</h1>
                    <a href=" {{route('details.create')}} " class="btn btn-lg btn-primary">Crear Detalle</a>
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
                            <th>ID libro</th>
                            <th>ID prestamo</th>
                            <th>Fecha de retiro</th>
                            <th>Fecha de entrega</th>
                            <th colspan="3">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $detail)
                        <tr>
                            <td> {{$detail->id}} </td>
                            <td> {{$detail->book_id}} </td>
                            <td> {{$detail->loan_id}} </td>
                            <td> {{$detail->from_date}} </td>
                            <td> {{$detail->to_date}} </td>
                            <td>
                                <a href=" {{route('details.show',$detail)}} " class="btn btn-sm btn-info">
                                    Mostrar
                                </a>
                            </td>
                            <td>
                                <a href=" {{route('details.edit',$detail)}} " class="btn btn-sm btn-success">
                                    Editar
                                </a>
                            </td>
                            <td>
                                
                                <form action=" {{ route('details.destroy', $detail) }} " method="POST">
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