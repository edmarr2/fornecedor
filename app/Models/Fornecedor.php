<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Notifications\Notifiable;

class Fornecedor extends Model
{
    use Notifiable;
    protected $table = 'fornecedores';
    protected $fillable = ['empresa_id','nome', 'email', 'mensalidade'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
