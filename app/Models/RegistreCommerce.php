<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistreCommerce extends Model
{
    use HasFactory;

    public function entreprise(){

        return $this->hasOne(Entreprise::class);
    }

    public function ninea(){
        return $this->belongsTo(Ninea::class);
    }
}
