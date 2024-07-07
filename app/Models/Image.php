<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public $fillable = ['eventos_id', 'ruta'];

    public function evento()
    {
        return $this->belongsTo(Eventos::class);
    }
}

