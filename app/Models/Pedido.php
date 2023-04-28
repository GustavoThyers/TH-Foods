<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['name',
                            'address',
                            'payment',
                            'quantity',
                            'produtos_id'];


   use HasFactory;                         
}
