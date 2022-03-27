<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siege extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function commune(){
        return $this->belongsTo(Commune::class);
    }

    public function entreprises(){

        return $this->hasMany(Entreprise::class);
    }
}
