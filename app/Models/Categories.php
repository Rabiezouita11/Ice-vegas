<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom',
        'Image'
    ];
    public function products()
    {
        return $this->hasMany(Produits::class, 'categorie_id', 'id');
        // Assuming 'categorie_id' is the foreign key in the produits table
    }
}
