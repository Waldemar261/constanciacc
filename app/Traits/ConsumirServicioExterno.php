<?php

namespace App\Traits;
use GuzzleHttp\Client;
trait ConsumirServicioExterno
{
    use ApiResponser;
    public function consultar($metodo, $urlSolicitada, $parametros=[],$cabeceras=[])
    {
        $cliente = new Client([
            'base_uri' => $this->uriBase,
            //'timeout' => 2.0,
        ]);
        $response = $cliente->request($metodo, $urlSolicitada, ['form_params' => $parametros, 'headers' => $cabeceras]);
        //return $response->getBody()->getContents();  
        $coleccion = json_decode($response->getBody()->getContents());
        if ($coleccion == true){
            $datos = [
                "wsp_mensaje" => "Alumno encontrado",
                "nombreCompleto" => $coleccion->nombreCompleto,
                "matricula" => $coleccion->matricula,
                "carrera" => $coleccion->carrera,
                "curp" => $coleccion->curp,
                "grupo" => $coleccion->grupo,
                "cuatrimestre" => $coleccion->cuatrimestre,
                "fechaNacimiento" => $coleccion->fechaNacimiento,
                "sexo" => $coleccion->sexo,
                "division" => $coleccion->division,
                "seguro" => $coleccion->seguro,
            ];
            return $this->succesResponse($datos);
        }
        else{
            return $this->errorResponse("No se ha encontrado registro asociado a la matricula ingresada",404);
        }
    }
}