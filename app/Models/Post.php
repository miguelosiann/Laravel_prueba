<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $table = 'posts';

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function($value) {
                return strtolower($value); //convertir el valor en minuscula    
            },
            get: function($value) {
                return ucfirst($value); //convertir la primera letra en mayuscula
            }
        );
    }
}

