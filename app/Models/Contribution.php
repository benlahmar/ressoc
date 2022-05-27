<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    protected $table='contribution';
    protected $fillable = [
        'titre',
        'contenu'
    ];

    public function consultation()
    {
        return $this->belongsTo('App\Models\Consultation');
    }

    public function likes()
    {
        return $this->hasMany('App\Models\Like');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
