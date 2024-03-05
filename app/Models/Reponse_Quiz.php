<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse_Quiz extends Model
{
    use HasFactory;
    protected $fillable = [
        'Reponse',
        'users_id',
        'jouers_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function jouer()
    {
        return $this->belongsTo(Jouer::class, 'jouers_id', 'id');
    }
}
