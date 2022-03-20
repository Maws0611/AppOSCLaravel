<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\entreprises;
use App\Models\fonctions;

class employes extends Model
{
    use HasFactory;

    public function entreprise()
    {
        return $this->belongsTo(entreprises::class);
    }

    public function fonction()
    {
        return $this->belongsTo(fonctions::class);
    }
}
