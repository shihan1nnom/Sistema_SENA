<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Programa_Formacion extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table='programas_formacion';
    protected $primarykey='id';
    protected $fillable = [
        'codigo',
        'nombre',
        'siglas',
    ];

    public function programas_formacion(){
        return $this->hasMany(Programa_Formacion::class);
    }
}
