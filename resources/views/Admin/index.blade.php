@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="text-left">SALUDENAR <img src="{{ 'img/img1.png' }}" width="50" height="40"></h1>
            </div>
            <div class="col-6">
                <h1 class="text-right">{{ now()->format('d/m/Y') }}</h1>
            </div>

        </div>

    </div>
@stop

@section('content')
    <h5 class="text-center">¡Hola! <b>{{ Auth::user()->name}}</b>, desde aquí podras administrar tus citas.</h5>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <b>Gestionar horario</b>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ 'img/img5.png' }}" width="50" height="50">
                            <br>
                            <a href="#" class="btn btn_primay">Ir al panel</a>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <b>Agendar cita</b>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ 'img/img6.png' }}" width="50" height="50">
                            <br>
                            <a href="#" class="btn btn_primay">Ir al panel</a>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <b>Mis citas</b>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ 'img/img4.png' }}" width="50" height="50">
                            <br>
                            <a href="#" class="btn btn_primay">Ir al panel</a>
                        </div>

                    </div>

                </div>

            </div>


        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop