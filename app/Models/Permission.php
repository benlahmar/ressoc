<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name',
        'action',
        'ressource'
    ];

    public function roles()
    {
        $this->belongsToMany('App\Models\Role');
    }
    use HasFactory;
}
