@extends('layouts.main')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{!! route('transparencia') !!}">Transparencia</a></li>
        <li class="breadcrumb-item active" aria-current="page">Mecanismos de control</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="row">
    <div class="col text-center">
        <h1>MECANISMOS DE CONTACTO</h1>
    </div>
</div>
<div class="row">
    
    <div class="col">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Mecanismos para la atención al ciudadano
                        </button>
                    </h2>
                </div>
                
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <dl>
                            <dt>Instalaciones y dirección de correspondencia:</dt>
                            <dd>Carrera 32 No. 12-81 Secretaría Distrital de Salud, Edificio IDCBIS, Bogotá - Colombia</dd>
                            <dt>Teléfono:</dt>
                            <dd>(57+1) 364 9620</dd>
                            <dt>Correo electrónico:</dt>
                            <dd>contacto@idcbis.org.co</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Localización física, sucursales o regiones, horarios y días de atención al público
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <dl>
                            <dt>Sede principal</dt>
                            <dd>
                                <p class="m-0">Carrera 32 No. 12-81 Secretaría Distrital de Salud, Edificio IDCBIS, Bogotá - Colombia</p>
                                <p class="m-0"><i>Teléfono:</i> (57+1) 364 9620</p>
                                <p class="m-0"><i>Horario:</i> Lunes a viernes de 7:30 am - 4:30 pm jornada continua</p>
                                <p class="m-0"><i>Correo electrónico:</i> contacto@idcbis.org.co</p>
                            </dd>
                            <dt>Punto extramural de colecta de sangre</dt>
                            <dd>
                                <p class="m-0">Avenida Ciudad de Cali # 43 – 55 Sur, SuperCade Américas, Bogotá - Colombia</p>
                                <p class="m-0"><i>Teléfono:</i> (57+1) 364 9620</p>
                                <p class="m-0"><i>Horario:</i> Lunes a viernes de 8:00 am - 4:00 pm jornada continua</p>
                                <p class="m-0"><i>Correo electrónico:</i> contacto@idcbis.org.co</p>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Correo electrónico para notificaciones judiciales
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <dl>
                            <dt>Correo electrónico para notificaciones judiciales</dt>
                            <dd>contacto@idcbis.org.co</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Políticas de seguridad de la información del sitio web y protección de datos personales
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li></li>
                                <a href="">
                                    <i class="fas fa-file-pdf fa-lg"></i> Políticas de seguridad de la información
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fas fa-file-pdf fa-lg"></i> Protección de datos personales
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- row -->
@endsection