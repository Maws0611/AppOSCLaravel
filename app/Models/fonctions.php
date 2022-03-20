<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\employes;

class fonctions extends Model
{
    use HasFactory;

    public function employe()
    {
        return $this->hasOne(employes::class);
    }
}
