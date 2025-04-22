<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    // Especifica la tabla personalizada
    protected $table = 'usuarios';

    // Campos que se pueden asignar en masa
    protected $fillable = [
        'nombre',
        'apellido',
        'edad',
        'telefono',
        'genero',
        'password',
        'rol',
        'email',
        // Para especificar exactamente qué campos pueden ser llenados automáticamente. Si no pones los campos en $fillable, Laravel los ignorará por seguridad, evitando que alguien te meta campos no deseados (como cambiar el rol de un usuario desde un formulario, por ejemplo).
    ];

    // Campos que deben ocultarse al serializar
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Cast para asegurar tipos
    protected $casts = [
        'edad' => 'integer',
    ];

    // Si tu tabla no tiene las columnas created_at / updated_at:
    // public $timestamps = false;
}
// Si agregas luego las columnas created_at y updated_at, puedes quitar public $timestamps = false;.

