<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\registreCommerces;

class nineas extends Model
{
    use HasFactory;

    public function registreCommerce()
    {
        return $this->hasOne(registreCommerces::class);
    }
}
