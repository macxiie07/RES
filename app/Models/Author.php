<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name' => 'required',
        'last_name' => 'required',
        'middle_initial' => 'required',

    ];
}
