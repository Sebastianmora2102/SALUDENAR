@extends('adminlte::page')

@section('title', 'Doctores')

@section('content_header')
    <h2 class="text-center"><b>PROFESIONALES EN SALUD</b></h2>
@stop

@section('content')

    <div class="card">
        <div class="card-header container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="#" class="btn btn-primary">Agregar Doctor</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form action="{{route('doctores.index')}}" method="GET">
                        <div class="mb-3 row">
                            <div class="sm-9">
                                <input type="text" name="filterValue" placeholder="Buscar por nombre de profesional" class="form-control rounded border-primary text-secondary">
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-info"><b>Buscar</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th class="text-center" colspan="3">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ( $doctores as $doctor )
                    <tr>
                        <td><b>{{$doctor->id}}</b></td>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->email}}</td>
                        <td width=2px>
                            <a href="#" class="btn btn-primary btn-sm mb-2">Mostrar</a>
                        </td>
                        <td width=5px>
                            <a href="#" class="btn btn-primary btn-sm mb-2">Editar</a>
                        </td>
                        <td width=5px>
                            <form action="#" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">

                            </form>
                        </td>
                    </tr> 
                @endforeach
                
            </tbody>
        </table>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop