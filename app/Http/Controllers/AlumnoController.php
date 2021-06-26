<?php

namespace App\Http\Controllers;

use app\Servicios\ServicioAlumno;
use app\Traits\Solicitudes;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    use ApiResponser;

    public $servicioAlumno;

    public function __construct(ServicioAlumno $servicioAlumno)
    {
        $this->servicioAlumno = $servicioAlumno;
    }
    public function show(Request $request){
        return $this->servicioAlumno->obtenerAlumno($request->ews_matricula);
    }

}
