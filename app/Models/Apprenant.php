<?php

namespace App\Models;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;

    protected $fillable = ['matricule', 'nom', 'prenom', 'niveau'];

    public function formations(){
        return $this->belongsToMany(Formation::class);
    }
}
