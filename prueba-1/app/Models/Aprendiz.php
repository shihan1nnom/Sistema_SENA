<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aprendiz extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table='aprendices';
    protected $primarykey='id';
    protected $fillable = [
        'nombres',
        'apellidos',
        'documento',
        'tipo_documento',
        'correo',
        'fecha_nacimiento',
        'genero',
        'ficha_id',
    ];

    public function aprendices(){
        return $this->hasMany(Aprendiz::class);
    }
}
