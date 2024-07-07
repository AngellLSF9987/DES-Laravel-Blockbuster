<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

        // Define los atributos que se pueden asignar en masa
        protected $fillable = [
            'name',
            'born',
            'film',
            'year',
            'image',
        ];

      // Crear Actor - Asignacion en masa //  

    /* 
        $actor = Actor::create([
        'name' => 'Leonardo DiCaprio',
        'born' => '1974-11-11',
        'film' => 'Inception',
        'image' => 'leonardo_dicaprio.jpg',
    ]);
    
    */

    // Actualizar Info Actor //

    /*
       $actor = Actor::find(1);
       $actor->update([
       'name' => 'Johnny Depp',
       'born' => '1963-06-09',
       'film' => 'Pirates of the Caribbean',
       'image' => 'johnny_depp.jpg',
    ]);
    
    */
}
