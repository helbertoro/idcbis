@extends('layouts.main')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{!! route('transparencia') !!}">Transparencia</a></li>
        <li class="breadcrumb-item active" aria-current="page">Estructura orgánica</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="row">
    <div class="col text-center">
        <h1>ESTRUCTURA ORGANICA Y TALENTO HUMANO</h1>
    </div>
</div>
<div class="row">
    
    <div class="col">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Misión y visión
                        </button>
                    </h2>
                </div>
                
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <dl>
                            <dt>Misión</dt>
                            <dd>Promover y contribuir al avance de las ciencias de la salud, la investigación biotecnológica, la provisión de insumos biológicos y la formación de recurso humano en medicina transfusional, terapia e ingeniería tisular y celular avanzada, medicina regenerativa y medicina de laboratorio, en función de la cuidad, región, país, a través de un equipo humano altamente calificado, con estándares de calidad, tecnología de punta, suficiencia y equidad.</dd>
                            <dt>Visión</dt>
                            <dd>Para el 2020, ser reconocidos a nivel nacional e internacional como un centro de excelencia en investigación de ciencias biomédicas y biotecnología en salud.</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Funciones y deberes
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <p><b>ARTÍCULO 18º.</b> Funciones esenciales del Instituto Distrital de Ciencia, Biotecnología e Innovación en Salud. El Instituto Distrital de Ciencia, Biotecnología e Innovación en Salud –IDCBIS- desarrollará las siguientes actividades principales:</p>
                        <ul class="list-unstyled pl-4">
                            <li><b>a).</b> Fortalecer y fomentar una cultura ciudadana para la donación de sangre, componentes sanguíneos, órganos y tejidos humanos y células con propósitos de trasplante, medicina regenerativa o investigación.</li>
                            <li><b>b).</b> Obtener, procesar, almacenar y distribuir componentes sanguíneos, tejidos humanos y células madre con propósitos de trasplante, medicina regenerativa o investigación.</li>
                            <li><b>c).</b> Ofrecer servicios centralizados, altamente especializados y de referencia, en banco de sangre, banco de tejidos humanos, banco de sangre de cordón umbilical, terapia celular, medicina transfusional, medicina regenerativa y laboratorio de inmunología de transfusión y trasplantes.</li>
                            <li><b>d).</b> Formar, capacitar y entrenar talento humano en las áreas de conocimiento desarrolladas por la entidad, con énfasis en investigación.</li>
                            <li><b>e).</b> Gestionar líneas de investigación e innovación tecnológica en diversos campos de las ciencias de la salud humana, con énfasis en medicina transfusional, ingeniería tisular, terapia celular avanzada y medicina regenerativa, en coordinación con centros académicos y de investigación nacionales e internacionales.</li>
                            <li><b>f).</b> Servir como entidad asesora, consultora y de referencia, para entidades nacionales e internacionales en los aspectos relacionados con el desarrollo de su objeto social.</li>
                            <li><b>g).</b> Las demás actividades que señalen los estatutos y que sean conexas con su objeto social.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Procesos y procedimientos
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Organigrama
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8">
                                <img class="img-fluid" src="https://idcbis.org.co/wp-content/uploads/2018/05/organigrama-web.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Directorio de información de servidores públicos y contratistas
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Directorio de entidades
                        </button>
                    </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSeven">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Directorio de agremieaciones, asociaciones y otros grupos de interés
                        </button>
                    </h2>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingEigth">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEigth" aria-expanded="false" aria-controls="collapseEigth">
                            Ofertas de empleo
                        </button>
                    </h2>
                </div>
                <div id="collapseEigth" class="collapse" aria-labelledby="headingEigth" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li>
                                <a target="_blank" href="https://idcbis.org.co/trabaje-con-nosotros/">
                                    <i class="fas fa-external-link-alt"></i> Trabaje con nosotros
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