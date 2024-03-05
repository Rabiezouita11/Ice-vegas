<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suivi_point_de_fidelite extends Model
{
    use HasFactory;
    protected $fillable = [
        'Totale_point',
        'Image',
        'users_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
