<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprises extends Model
{
    use HasFactory;

    // protected $cast = [
    //     'contratFormel'=> 'boolean',
    //     'organigrammeClaire'=> 'boolean',
    //     'dispositifFormation '=> 'boolean',
    //     'cotisationSocial' => 'boolean'
    // ];
// Recupere l'ensembe des siges
    // public function sieges()
    // {
    //     return $this->hasMany(Sieges::class);
    // }
protected $guarded = ['id']; 
    
}
