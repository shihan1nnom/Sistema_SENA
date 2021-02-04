<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ficha extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table='fichas';
    protected $primarykey='id';
    protected $fillable = [
        'nombre',
        'jornada',
        'aula',
        'programa_id',
    ];

    public function fichas(){
        return $this->hasMany(Ficha::class);
    }
}
