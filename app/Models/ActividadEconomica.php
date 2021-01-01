<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spiritix\LadaCache\Database\LadaCacheTrait;

/**
 * Class ActividadEconomica.
 * @version October 2, 2018, 4:27 am UTC
 *
 * @property int codigo
 * @property string descripcion
 */
class ActividadEconomica extends Model
{
    use SoftDeletes, LadaCacheTrait;

    public $table = 'actividades_economicas';

    public $fillable = [
        'codigo',
        'descripcion',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codigo' => 'integer',
        'descripcion' => 'string',
    ];

    /**
     * Validation rules.
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'descripcion' => 'max:200|required',
    ];
}