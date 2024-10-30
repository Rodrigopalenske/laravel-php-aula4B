<?php

namespace App\Models;
// ORM eloquent library que permite buscas no banco de uma forma fácil
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'endereco', 'observacao', 'avatar'];
}
