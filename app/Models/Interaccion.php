<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaccion extends Model
{
    use HasFactory;
    public $table = "interacciones";
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, int, string>
     */
    protected $fillable = [
        'idInterested', // id del usuario que dio like
        'idCandidate',  // id del usuario al que se le dio like
        'type', // A = Aceptado, R = Rechazado
    ];
}
