<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom',
        'Description',
        'Image',
        'Prix',
        'categorie_id'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categories::class, 'categorie_id', 'id');
        // Change 'categories_id' to 'categorie_id' if that's the correct foreign key
    }

}
