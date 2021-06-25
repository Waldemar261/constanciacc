<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitudes extends Model
{
    //
    protected $fillable = [
        'ews_token',
        'ews_no_solicitud',
        'ews_llave',
        'ews_id_tramite',
        'ews_fecha_solicitud',
        'ews_hora_solicitud',
        'ews_no_solicitud_api',
        'ews_matricula',
    ];
}
