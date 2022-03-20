<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sieges;
use App\Models\registreCommerces;
use App\Models\coordonneesGPS;

class entreprises extends Model
{
    use HasFactory;

    public function siegesEntreprises(){
        return $this->hasMany(sieges::class);
    }
    
    public function employes(){
        return $this->hasMany(employes::class);
    }

    public function registreCommerce()
    {
        return $this->belongsTo(registreCommerces::class);
    }

    public function coordonneesGPS()
    {
        return $this->belongsTo(coordonneesGPS::class);
    }

protected $guarded = ['id']; 
    
}
