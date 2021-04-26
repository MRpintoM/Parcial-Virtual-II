
@extends('layouts.plantilla')

@section('content')
    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Consulta de Clientes
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">NIT</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Edad</th>
            <th scope="col">Correo Electronico</th>
            <th scope="col">Telefono</th>
            <th scope="col">Genero</th>
            <th scope="col">Departamento</th>
            <th scope="col">Categoria</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente )
            <tr>
                <td>{{$cliente->nit}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->fecha_de_nacimiento}}</td>
                <td>{{$cliente->edad}}</td>
                <td>{{$cliente->correo}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->genero}}</td>
                <td>{{$cliente->departamento}}</td>
                <td>{{$cliente->categoria}}</td>
                <td>
                    <form action="{{ route('cliente.delete',$cliente->idcliente) }}" method="POST">
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

