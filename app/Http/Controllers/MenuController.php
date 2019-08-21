<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function transparencia(){
        return view('transparencia');
    }

    public function mecanismosContacto(){
        return view('transparencia.mecanismos_de_contacto');
    }

    public function informacionInteres(){
        return view('transparencia.informacion_de_interes');
    }

    public function estructuraOrganica(){
        return view('transparencia.estructura_organica');
    }

    public function normatividad(){
        return view('transparencia.normatividad');
    }

    public function presupuesto(){
        return view('transparencia.presupuesto');
    }

    public function planeacion(){
        return view('transparencia.planeacion');
    }

    public function control(){
        return view('transparencia.control');
    }

    public function contratacion(){
        return view('transparencia.contratacion');
    }

    public function tramitesServicios(){
        return view('transparencia.tramites_y_servicios');
    }

    public function instrumentosGestion(){
        return view('transparencia.instrumentos_de_gestion');
    }

    public function transparenciaPasiva(){
        return view('transparencia.transparencia_pasiva');
    }

}
