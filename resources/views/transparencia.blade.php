@extends('layouts.main')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Transparencia</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div class="col text-center">
            <h1>TRANSPARENCIA</h1>
        </div>
    </div>
    <div class="row">
        
        <div class="col-4 mb-4">
            <div class="card">
                <a href="{!! route('mecanismosContacto') !!}">
                    <img src="{!! asset('img/categorias/1.jpg') !!}" class="card-img-top" alt="transparencia - mecanismos de control">
                </a>
                <div class="card-body">
                    <a href="{!! route('mecanismosContacto') !!}">Ver más</a>
                </div>
            </div>
        </div>
        
        <div class="col-4 mb-4">
            <div class="card">
                <a href="{!! route('informacionInteres') !!}">
                    <img src="{!! asset('img/categorias/2.jpg') !!}" class="card-img-top" alt="transparencia - información de interés">
                </a>
                <div class="card-body">
                    <a href="">Ver más</a>
                </div>
            </div>
        </div>
        
        <div class="col-4 mb-4">
            <div class="card">
                <a href="{!! route('estructuraOrganica') !!}">
                    <img src="{!! asset('img/categorias/3.jpg') !!}" class="card-img-top" alt="transparencia - estructura orgánica y talento humano">
                </a>
                <div class="card-body">
                    <a href="">Ver más</a>
                </div>
            </div>
        </div>
        
        <div class="col-4 mb-4">
            <div class="card">
                <a href="{!! route('normatividad') !!}">
                    <img src="{!! asset('img/categorias/4.jpg') !!}" class="card-img-top" alt="transparencia - normatividad">
                </a>
                <div class="card-body">
                    <a href="">Ver más</a>
                </div>
            </div>
        </div>
        
        <div class="col-4 mb-4">
            <div class="card">
                <a href="{!! route('presupuesto') !!}">
                    <img src="{!! asset('img/categorias/5.jpg') !!}" class="card-img-top" alt="transparencia - presupuesto">
                </a>
                <div class="card-body">
                    <a href="">Ver más</a>
                </div>
            </div>
        </div>
        
        <div class="col-4 mb-4">
            <div class="card">
                <a href="{!! route('planeacion') !!}">
                    <img src="{!! asset('img/categorias/6.jpg') !!}" class="card-img-top" alt="transparencia - planeación">
                </a>
                <div class="card-body">
                    <a href="">Ver más</a>
                </div>
            </div>
        </div>
        
        <div class="col-4 mb-4">
            <div class="card">
                <a href="{!! route('control') !!}">
                    <img src="{!! asset('img/categorias/7.jpg') !!}" class="card-img-top" alt="transparencia - control">
                </a>
                <div class="card-body">
                    <a href="">Ver más</a>
                </div>
            </div>
        </div>
        
        <div class="col-4 mb-4">
            <div class="card">
                <a href="{!! route('contratacion') !!}">
                    <img src="{!! asset('img/categorias/8.jpg') !!}" class="card-img-top" alt="transparencia - contratación">
                </a>
                <div class="card-body">
                    <a href="">Ver más</a>
                </div>
            </div>
        </div>
        
        <!-- <div class="col-4 mb-4">
            <div class="card">
                <a href="{!! route('tramitesServicios') !!}">
                    <img src="{!! asset('img/categorias/9.jpg') !!}" class="card-img-top" alt="transparencia - trámites y servicios">
                </a>
                <div class="card-body">
                    <a href="">Ver más</a>
                </div>
            </div>
        </div> -->
        
        <!-- <div class="col-4 mb-4">
            <div class="card">
                <a href="{!! route('instrumentosGestion') !!}">
                    <img src="{!! asset('img/categorias/10.jpg') !!}" class="card-img-top" alt="transparencia - instumentos de gestión">
                </a>
                <div class="card-body">
                    <a href="">Ver más</a>
                </div>
            </div>
        </div> -->
        
        <!-- <div class="col-4 mb-4">
            <div class="card">
                <a href="{!! route('transparenciaPasiva') !!}">
                    <img src="{!! asset('img/categorias/11.jpg') !!}" class="card-img-top" alt="transparencia - transparencia pasiva">
                </a>
                <div class="card-body">
                    <a href="">Ver más</a>
                </div>
            </div>
        </div> -->

    </div> <!-- row -->
@endsection