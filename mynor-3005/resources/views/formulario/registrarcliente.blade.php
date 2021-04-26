
@extends('layouts.plantilla')

@section('content')

    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Registro de clientes
                    </h4>
                </div>
            </div>
        </div>
        <div class="p-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif

            @if(\Session::has('warning'))
                <div class="alert alert-warning">
                    <ul>
                        <li>{!! \Session::get('warning') !!}</li>
                    </ul>
                </div>
            @endif

            <form action="{{ route('1') }}" method="POST">
                @csrf
                @method('POST')



                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>NIT</label>
                            <input type="number" name="nit" id="nit" maxlength="10" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Nombre Completo</label>
                            <input type="text" name="nombre" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Fecha de Nacimiento</label>
                            <input type="date" id="nacimiento" name="nacimiento" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Edad</label>
                            <input type="number" id="edad" name="edad" class="form-control" >



                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Correo Electronico</label>
                            <input type="text"  name="correo" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="number"  name="telefono" class="form-control" >
                        </div>
                    </div>
                </div>
                <!-- Mostrar las marcas de productos que están alamacenadas en la BD  -->
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Genero</label>
                            <select name="genero" class="form-control" >
                                <option value="">--Seleccione--</option>
                                @foreach( $Generos as $genero)
                                    <option value="{{$genero->idgenero}}"> {{$genero->des_genero}}  </option>
                                @endforeach




                            </select>
                        </div>
                    </div>
                </div>
                <!-- Termina la muestra de las marcas de productos de la BD  -->

                <!-- Mostrar las marcas de productos que están alamacenadas en la BD  -->
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Departamento</label>
                            <select name="departamento" class="form-control" >
                                <option value="">--Seleccione--</option>
                                @foreach( $Departamentos as $departamento)
                                    <option value="{{$departamento->iddepartamento}}"> {{$departamento->de_departamento}}  </option>
                                @endforeach


                            </select>
                        </div>
                    </div>
                </div>
                <!-- Termina la muestra de las marcas de productos de la BD  -->
                <!-- Mostrar las marcas de productos que están alamacenadas en la BD  -->
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Categoria</label>
                            <select name="categoria" class="form-control" >
                                <option value="">--Seleccione--</option>
                                @foreach( $Categorias as $categoria)
                                    <option value="{{$categoria->idcategoria}}"> {{$categoria->des_categoria}}  </option>
                                @endforeach


                            </select>
                        </div>
                    </div>
                </div>
                <!-- Termina la muestra de las marcas de productos de la BD  -->

                <div class="row">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="#" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
