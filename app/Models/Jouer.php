<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jouer extends Model
{
    use HasFactory;
    protected $fillable = [
        'Image',
        'Reponse1',
        'Reponse2',
        'Reponse3',
        'ReponseCorrect',
        'points_gained',
        'name'
    ];
    public function reponseQuizzes()
    {
        return $this->hasMany(Reponse_Quiz::class, 'jouers_id', 'id');
    }
}
