<?php

namespace App\Models;

use App\Models\Apprenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'code', 'duree'];

    public function apprenants(){
        return $this->belongsToMany(Apprenant::class);
    }
}
