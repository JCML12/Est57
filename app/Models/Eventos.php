<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;

    /*
        $fillable permite especificar qué datos se asignarán al modelo
        en los métodos en los que se usan 'asignamientos en masa'.
    */
    public $fillable = ['titulo', 'img_url', 'descripcion', 'fecha'];
    /*
        Verifica a qué método del controlador resource debe enviar el action del
        form, en caso de que se envíe un id este realizará una redirección al
        método update,en caso contrario realizará una redirección al método store
    */
    public function url()
    {
        return $this->id ? 'admin.evento.update' : 'admin.evento.store';
    }
    /*
        Verifica a que método de envío que utilizará el form,
        en caso de que se envíe un id, éste enviará los datos mediante
        PUT, en caso contrario enviará los datos por medio de POST
    */
    public function method()
    {
        return $this->id ? 'PUT' : 'POST';
    }

    /*
        Define una relación de uno a muchos entre el modelo Eventos y el modelo Image
    */ 
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
