<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gmail extends Model
{
    use HasFactory;


    public function gmail()
    {
        return $this->hasMany(Contact::class);
    }
}
