<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //inform which fields of the model can be updated at once.
    //Avoid mass assignment attacks to the DB
    protected $fillable = ['name', 'skill', 'bio', 'company_id'];

    /** @use HasFactory<\Database\Factories\PlayerFactory> */
    use HasFactory;


    //every playermodel is related to the company model
    //every player record belong to a company record
    //can access a company data from a player instance     
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
