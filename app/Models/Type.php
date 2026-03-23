<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable =[
        'type',
    ];

    public function tasks1()
    {
        return $this->hasMany(Task::class);
    }

    /*public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }*/
}
