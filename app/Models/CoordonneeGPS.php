<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoordonneeGPS extends Model
{
    use HasFactory;

    public function entreprise(){

        return $this->hasOne(Entreprise::class);
    }
}
