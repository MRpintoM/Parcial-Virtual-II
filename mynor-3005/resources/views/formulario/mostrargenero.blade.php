
@extends('layouts.plantilla')

@section('content')
    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Consulta de Departamentos
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id de Genero</th>
            <th scope="col"> Genero</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($generos as $genero )
            <tr>
                <td>{{$genero->idgenero}}</td>
                <td>{{$genero->des_genero}}</td>
                <td>

                    <form action="{{ route('genero.delete',$genero->idgenero) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="eliminar">
                    </form>


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
