<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $table = 'operations';

    protected $fillable = ['compte_id', 'type_op', 'montant', 'date_op'];

    public function compte()
    {
        return $this->belongsTo(Compte::class);
    }
}
