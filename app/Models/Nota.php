<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    /** @use HasFactory<\Database\Factories\NotaFactory> */
    use HasFactory;
    protected $fillable = [
        'materia',
        'estudiante_id',
        'nota'
    ];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }

    public function nota_ind() //dejo esto que me causó gracia re-ver.
    {
        return $this->nota . " - " . $this->estudiante->nombre;
    }

}
