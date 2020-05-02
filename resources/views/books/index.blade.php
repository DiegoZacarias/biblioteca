@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Libros
                    <a href=" {{route('books.create')}} " class="btn btn-sm btn-primary">Crear</a>
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
                            <th>Codigo libro</th>
                            <th>Categoria</th>
                            <th>Nombre</th>
                            <th>Autor</th>
                            <th colspan="3">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td> {{$book->id}} </td>
                            <td> {{$book->book_code}} </td>
                            <td> {{$book->category->name}} </td>
                            <td> {{$book->name}} </td>
                            <td> {{$book->writer}} </td>
                            <td>
                                <a href=" {{route('books.show',$book)}} " class="btn btn-sm btn-info">
                                    Mostrar
                                </a>
                            </td>
                            <td>
                                <a href=" {{route('books.edit',$book)}} " class="btn btn-sm btn-primary">
                                    Editar
                                </a>
                            </td>
                            <td>
                                
                                <form action=" {{ route('books.destroy', $book) }} " method="POST">
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
