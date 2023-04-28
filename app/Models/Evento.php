<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = ['name_user', 'telephone_user', 'quantity', 'date_time', 'tipo_id'];
    use HasFactory;
}
