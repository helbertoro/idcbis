@extends('layouts.main')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{!! route('transparencia') !!}">Transparencia</a></li>
        <li class="breadcrumb-item active" aria-current="page">Control</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="row">
    <div class="col text-center">
        <h1>CONTROL</h1>
    </div>
</div>
<div class="row">
    
    <div class="col mb-5">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Informes de gestión, evaluación y auditoría
                        </button>
                    </h2>
                </div>
                
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="list-unstyled pl-2">
                            <li>
                                <a href="/documentos/control/informe_final_auditoria_contraloria.pdf" target="_blank">
                                    <i class="fas fa-file-pdf fa-lg mr-2"></i> Informe final auditoria Contraloría
                                </a>
                            </li>
                            <li>
                                <a href="/documentos/planeacion/principales_logros_idcbis.pdf" target="_blank">
                                    <i class="fas fa-file-pdf fa-lg mr-2"></i> Plan de rendición de cuentas
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Reportes de control interno
                        </button>
                    </h2>
                </div>
                
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Alvaro
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Planes de mejoramiento
                        </button>
                    </h2>
                </div>
                
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="list-unstyled pl-2">
                            <li>
                                <a href="/documentos/control/seguimiento_al_plan_de_mejoramiento.pdf" target="_blank">
                                    <i class="fas fa-file-pdf fa-lg mr-2"></i> Seguimiento al plan de mejoramiento
                                </a>
                            </li>
                        </ul>
                        <p><b>Link: </b> <a href="http://www.contraloriabogota.gov.co/sites/default/files/Contenido/Informes/Auditoria/Direcci%C3%B3n%20Sector%20Salud/PAD_2018/JL-DC/Regularidad/R_IDCBIS_CODIGO164.pdf">Contraloría</a></p>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    
</div> <!-- row -->
@endsection

seguimiento_al_plan_de_mejoramiento.pdf