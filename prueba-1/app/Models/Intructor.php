<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Intructor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table='instructores';
    protected $primarykey='id';
    protected $fillable = [
        'nombres',
        'apellidos',
        'documento',
        'fotografia',
        'ficha_id',
    ];

    public function instructores(){
        return $this->hasMany(Intructor::class);
    }
}
