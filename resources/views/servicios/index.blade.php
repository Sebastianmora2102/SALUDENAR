@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h2 class="text-center"><b>SERVICIOS DE SALUD UDENAR</b></h2>
@stop

@section('content')
    <div class="card-body">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del servicio</th>
                    <th class="text-center" colspan="2">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ( $servicios as $servicio )
                    <tr>
                        <td><b>{{$servicio->id}}</b></td>
                        <td>{{$servicio->name}}</td>
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