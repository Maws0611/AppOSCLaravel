<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\entreprises;
use App\Models\nineas;

class registreCommerces extends Model
{
    use HasFactory;

    public function entreprise()
    {
        return $this->hasOne(entreprises::class);
    }

    public function ninea()
    {
        return $this->belongsTo(nineas::class);
    }
}
