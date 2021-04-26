
@extends('layouts.plantilla')

@section('content')
    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Consulta de Categorias
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id de Categoria</th>
            <th scope="col"> Categoria</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($Categorias as $categoria )
            <tr>
                <td>{{$categoria->idcategoria}}</td>
                <td>{{$categoria->des_categoria}}</td>
                <td>
                    <form action="{{ route('cate.delete',$categoria->idcategoria) }}" method="POST">
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
