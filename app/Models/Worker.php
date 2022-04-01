<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;


    public function supervisor()
    {
        return $this->belongsToMany(Supervisor::class);
    }
}
