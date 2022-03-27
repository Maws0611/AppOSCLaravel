<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function siege(){
        return $this->belongsTo(Siege::class);
    }

    public function employes(){
        return $this->hasMany(Employe::class);
    }

    public function registre_commerce(){
        return $this->belongsTo(RegistreCommerce::class);
    }

    public function coordonneeGPS(){
        return $this->belongsTo(CoordonneeGPS::class);
    }
    
}
