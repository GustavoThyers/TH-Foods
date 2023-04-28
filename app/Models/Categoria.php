<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produtos;


class Categoria extends Model
{
    protected $fillable = ['name', 'description', 'slug'];
    use HasFactory;
  
}
