<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['usu_nome_exibicao', 'usu_nome_completo', 'usu_contato', 'usu_endereco', 'usu_email', 'usu_senha'];
}
