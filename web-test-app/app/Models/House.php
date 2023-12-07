<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'deadline', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function apartments()
    {
        return $this->hasMany(Apartment::class, 'house_id');
    }
}
