@extends('layouts.main')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{!! route('transparencia') !!}">Transparencia</a></li>
        <li class="breadcrumb-item active" aria-current="page">Normatividad</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="row">
    <div class="col text-center">
        <h1>NORMATIVIDAD</h1>
    </div>
</div>
<div class="row">
    
    <div class="col mb-5">
        <div class="accordion" id="accordionExample">
            <!-- <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Sujetos obligados del orden nacional
                        </button>
                    </h2>
                </div>
                
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div> -->
            <!-- <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Sujetos obligados del orden territorial
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div> -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Otros sujetos obligados
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="list-unstyled pl-2">
                            <li>
                                <a href="/documentos/normatividad/acuerdo_641_de_20166.pdf" target="_blank">
                                    <i class="fas fa-file-pdf fa-lg mr-2"></i> Acuerdo 641 de 2016
                                </a>
                            </li>
                            <li>
                                <a href="/documentos/normatividad/normograma.pdf" target="_blank">
                                    <i class="fas fa-file-pdf fa-lg mr-2"></i> Normograma
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