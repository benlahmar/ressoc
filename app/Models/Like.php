<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table ="like";

    protected $fillable = [
        'date',
        'type'
    ];

    public function consultation()
    {
        $this->belongsTo('App\Models\Consultation');
    }
    use HasFactory;
}