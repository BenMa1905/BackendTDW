<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    use HasFactory;
    public $table = "perros";
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string,string,string,int,string,string,int>
     */
    protected $fillable = [
        'name',
        'breed',
        'sex',
        'age',
        'description',
        'photo',
        'idUser',
    ];
}
