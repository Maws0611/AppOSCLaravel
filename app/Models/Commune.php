<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departement;

class Commune extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function departement(){
        return $this->belongsTo(Departement::class);
    }

    public function sieges(){
        return $this->hasMany(Siege::class);
    }
}
