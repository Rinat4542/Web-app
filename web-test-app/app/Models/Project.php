<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function houses()
    {
        return $this->hasMany(House::class);
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }
}
