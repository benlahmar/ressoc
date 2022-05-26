<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
        'titre',
        'descript',
        'photo',
        'datedebut',
        'datefin'
    ];

    public function likes()
    {
       return  $this->hasMany('App\Models\Like');
    }

    public function contributions()
    {
        return  $this->hasMany('App\Models\Contribution');
    }
    use HasFactory;
}
