<?php

namespace App\Servicios;

use App\Traits\ConsumirServicioExterno;
use PhpParser\Node\Expr\FuncCall;

class ServicioAlumno{
    use ConsumirServicioExterno;

    public $uriBase;
    public function __construct()
    {
        $this->uriBase = config('services.alumnos.base_uri');    
    }

    public function obtenerAlumno($matricula)
    {
        return $this->consultar('GET',"/api/AlumnosApi/GetAlumnosByMatricula?matricula=".$matricula);
    }

    public function obtenercc($matricula)
    {
        return $this->consultar('GET',"/api/AlumnosApi/GetConstanciaccByMatricula?matricula=".$matricula);
    }
}