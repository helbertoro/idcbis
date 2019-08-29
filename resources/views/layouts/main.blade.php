<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Banco Distrital de Sangre - IDCBIS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('css/styles.css') !!}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <!-- Top informativo -->
    <div class="container-fluid background-blue py-2">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <i class="fas fa-phone-volume"></i> <span class="mr-3">Bogotá PBX (57) (1) 3649620</span> <i class="fas fa-envelope"></i> <span>contacto@idcbis.org.co</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="container">
        <div class="row mt-1 mb-3 align-items-center">
            <div class="col-3">
                <a href="{!! route('transparencia') !!}">
                    <img class="img-fluid" src="{!! asset('img/logo-IDCBIS.jpg') !!}" alt="Logo IDCBIS">
                </a>
            </div>
            <div class="col-9 text-right">
                <a href="https://idcbis.org.co/" type="button" class="btn btn-outline-secondary">Ir a la web</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @yield('breadcrumb')
            </div>
        </div>        
        @yield('content')
    </div> <!-- container -->
    <!-- footer -->
    <div class="container-fluid background-blue py-2">
        <div class="row">
            <div class="container">
                <footer class="row py-4">
                    <div class="col-12 col-md-3">
                        <img class="img-fluid mb-3" src="{!! asset('img/logo-IDCBIS-blanco.png') !!}" alt="Logo IDCBIS">
                        <p class="text-dark-grey">Entidad sin ánimo de lucro perteneciente al régimen tributario especial Art. 356 E.T.</p>
                    </div>
                    <div class="col-12 col-md-3">
                        <h6>INFORMACIÓN DE CONTACTO</h6>
                            <dl>
                                <dt>Instalaciones:</dt>
                                <dd>
                                    <p class="m-0">Carrera 32 No. 12-81 Edificio IDCBIS</p>
                                    <p class="m-0">Secretaría Distrital de Salud</p>
                                    <p class="m-0">Bogota - Colombia</p>
                                </dd>
                                <dt>Teléfono:</dt>
                                <dd>PBX (57+1) 3649620</dd>
                                <dt>Email:</dt>
                                <dd>contacto@idcbis.org.co</dd>
                                <dt>Notificaciones judiciales</dt>
                                <dd>idcbis@idcbis.org.co</dd>
                            </dl>
                    </div>
                    <div class="col-12 col-md-3">
                        <h6>TRANSPARENCIA E INFORMACIÓN PÚBLICA</h6>
                        <ul class="m-0 pl-3">
                            <li><a href="http://www.bogota.gov.co/sdqs#" target="_blank">Atención a usuarios</a></li>
                            <li><a href="https://idcbis.org.co/plan-anticorrupcion/">Seguimiento plan anticorrupción</a></li>
                            <li><a href="https://www.idcbis.org.co/pdf/politicadetransparencia.pdf" target="_blank">Política de transparencia</a>
                                <ul class="pl-4">
                                    <li><a href="https://www.idcbis.org.co/pdf/politicaderiesgo.pdf" target="_blank">Política de riesgo</a></li>
                                    <li><a href="https://www.idcbis.org.co/pdf/matrizderiesgosinsitutcionales.pdf" target="_blank">Mapas de riesgos operacionales y de corrupción</a></li>
                                </ul>
                            </li>
                            <li><a href="https://idcbis.org.co/estados-financieros-del-idcbis/">Estados financieros</a></li>
                            <li><a href="https://www.idcbis.org.co/pdf/pol%C3%ADticatransparenciadelmanejodedatos.pdf" target="_blank">Habeas data</a></li>
                            <li><a href="https://idcbis.org.co/contratacion-bienes-servicios/">Contratación de bienes y servicios</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3">
                        <h6>INFORMATE</h6>
                        <ul class="m-0 pl-3">
                            <li><a href="http://www.idcbis.org.co/trabaje-con-nosotros/">Trabaje con nosotros</a></li>
                            <li><a href="#">Publicaciones científicas</a></li>
                            <li><a href="https://idcbis.org.co/noticias/">Noticias</a></li>
                            <li><a href="https://idcbis.org.co/rendicion-de-cuentas/">Rendición de cuentas</a></li>
                            <li><a href="https://idcbis.org.co/contacto/">Contáctenos</a></li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>
    </div> <!-- footer -->
    <!-- Legal -->
    <div class="container">
        <div class="row">
            <div class="col py-2">
                <p class="m-0">© Copyright 2019 Todos los derechos reservados idcbis.org.co</p>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>