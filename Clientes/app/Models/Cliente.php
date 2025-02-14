<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = 
    [
        'Nome',
        'Email',
        'Telefone',
        'Data_Cadastro',
        'Cidade'

    ];
}
