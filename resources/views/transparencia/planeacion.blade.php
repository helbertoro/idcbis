@extends('layouts.main')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{!! route('transparencia') !!}">Transparencia</a></li>
        <li class="breadcrumb-item active" aria-current="page">Planeación</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="row">
    <div class="col text-center">
        <h1>PLANEACIÓN</h1>
    </div>
</div>
<div class="row">
    
    <div class="col mb-5">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Políticas, lineamientos y manuales
                        </button>
                    </h2>
                </div>
                
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="list-unstyled pl-2">
                            <li>
                                <a href="/documentos/planeacion/politica_de_SST.pdf" target="_blank">
                                    <i class="fas fa-file-pdf fa-lg mr-2"></i> Política de la seguridad y la salud en el trabajo
                                </a>
                            </li>
                            <li>
                                <a href="/documentos/planeacion/politica_ambiental.pdf" target="_blank">
                                    <i class="fas fa-file-pdf fa-lg mr-2"></i> Política ambiental
                                </a>
                            </li>
                            
                            <li>
                                <a href="/documentos/planeacion/principales_logros_idcbis.pdf" target="_blank">
                                    <i class="fas fa-file-pdf fa-lg mr-2"></i> Plan de rendición de cuentas
                                </a>
                            </li>
                            <li>
                                <a href="/documentos/planeacion/plan_anticorrupcion.pdf" target="_blank">
                                    <i class="fas fa-file-pdf fa-lg mr-2"></i> Plan anticorrupción
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