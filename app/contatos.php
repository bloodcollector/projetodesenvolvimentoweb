<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contatos extends Model
{
    protected $fillable =[
        'nome', 'endereco', 'telefone', 'tipo sanguineo'];
    
}
