<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Hasany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'strand',
        'level',
        'research_type',
    ];

   
    public function book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
