<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninea extends Model
{
    use HasFactory;

    public function registre_commerce(){

        return $this->hasOne(RegistreCommerce::class);
    }
}
