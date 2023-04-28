<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Produto extends Model
{
    protected $fillable = ['name', 'description', 'image', 'price', 'categoria_id'];
    use HasFactory;

}
