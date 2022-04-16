<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    /*
    J'aimerais créer une fonction online qui recuperer des informations filtrés dans la base
    Pour ce faire il faut utiliser le système de scope
    La fonction avec scope est appelé dans le controller

    ex: $this->online(); // j'utilise ici la fonction online que j'ai crée dans cette modèle
        public function scopOnline($query); // c'est comme que ceci la definition de la methode 
        online en dessus

    */
    public function scopeOnline($query){

        return $query->where('status', 1);
    }


    public function user(){
        
        return $this->belongsTo(User::class);
    }

    public function likes(){

        return $this->belongsToMany(User::class);
    }
}
