<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $table = 'comptes';

    protected $fillable = ['numero_compte', 'solde'];

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }
}
