<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    public function pedidoshasproducto(){
        return $this->hasMayny(pedidoshasproducto::class);
    }

    public function imagenes(){
        return $this->hasMayny(imagenes::class);
    }
}
