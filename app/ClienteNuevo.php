<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteNuevo extends Model
{
    protected $table='nuevos';

    protected $primaryKey='id_cliente';

    public $timestamps=false;

    protected $fillable=[
        'nombre',
        'apellido',
        'direccion',
        'telinmediato',
        'fecha',
        'talla',
        'largo',
        'color',
        'estilo',
        'nota',
        'condicion',
    ];

    protected $guarded=[

    ];
}
