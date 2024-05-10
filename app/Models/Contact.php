<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;
use illuminate\Database\Eloquent\Model;
use App\Models\Request\Database;
use Illuminate\Database\Eloquent\SoftDeletes;
use LaravelLegends\EloquentFilter\Concerns\HasFilter;
use Illuminate\Notifications\Notifiable;


class Contact extends Model {
protected $table='contacts';
protected $fillable = ['name' , 'Phone'] ;


use HasFactory, Notifiable;
use SoftDeletes;
use HasFilter;



protected $contact = [
    'deleted_at',
];





}






?>
