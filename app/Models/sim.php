<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sim extends Model
{
    use HasFactory;


    public function sim()
    {
        return $this->hasMany(Contact::class);
    }
}
