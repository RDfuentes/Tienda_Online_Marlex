<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table='clientes';

    protected $primaryKey='id_cliente';

    public $timestamps=false;

    protected $fillable=[
        'codigo_raiz',
        'codigo_reciente',
        'nombre',
        'apellido',
        'telefono',
        'nota',
        'condicion'
    ];

    protected $guarded=[

    ];
}
