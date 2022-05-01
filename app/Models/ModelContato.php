<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelContato extends Model
{
    protected $table='contato';
    protected $fillable=['nome', 'email', 'telefone'];
}
