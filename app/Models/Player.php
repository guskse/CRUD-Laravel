<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //inform which fields of the model can be updated at once.
    //Avoid mass assignment attacks to the DB
    protected $fillable = ['name','skill','bio'];

    /** @use HasFactory<\Database\Factories\PlayerFactory> */
    use HasFactory;
}


//Model View Controller