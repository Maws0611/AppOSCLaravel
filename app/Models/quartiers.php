<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quartiers extends Model
{
    use HasFactory;
    
    public function siegesQuartiers(){
        return $this->hasMany(sieges::class);
    }
}
