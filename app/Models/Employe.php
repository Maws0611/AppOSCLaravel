<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    public function entreprise(){
        return $this->belongsTo(Entreprise::class);
    }

    public function fonction(){
        return $this->belongsTo(Fonction::class);
    }
}
