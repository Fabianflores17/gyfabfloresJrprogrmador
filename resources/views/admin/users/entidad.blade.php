@extends('layouts.app')

@section('titulo_pagina', 'Equipos')
@section('titulo_pagina', 'Entidad')

@section('content')



    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Entidad</h1>
                </div>
                <div class="col ">
                    <a class="btn btn-outline-info float-right"
                       href="{{ route('home') }}"
                    >
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;
                        <span class="d-none d-sm-inline">Regresar</span>
                    </a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="content">
        <div class="container-fluid">


            <div class="card">
                <div class="card-body">

                    <h3>Modelo de Entidad Relacion</h3>
                    <div class="form-row" id="root">
                        <br>


                        <div class="col-md-12">

{{--                        insertar una imagen que esta guardaa en public--}}
                        <img src="{{ asset('img/entidad_relacion.png') }}" alt="">

                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12 mt-2 text-right">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
