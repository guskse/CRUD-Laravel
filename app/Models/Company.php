<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = ['name', 'location', 'description'];

    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;


    //relationship between company and player (one To Many)
    //a company record has many players record in it
    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
