<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\entreprises;
use App\Models\quartiers;

class sieges extends Model
{
    use HasFactory;

      public function entrepriseSiege()
    {
        return $this->belongsTo(entreprises::class);
    }

    public function quartierSiege()
    {
        return $this->belongsTo(quartiers::class);
    }

    
}
