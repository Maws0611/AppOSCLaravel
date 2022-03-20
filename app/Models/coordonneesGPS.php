<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\entreprises;

class coordonneesGPS extends Model
{
    use HasFactory;

    public function entreprise()
    {
        return $this->hasOne(entreprises::class);
    }
}
