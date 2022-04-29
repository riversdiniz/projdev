<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodigoLote extends Model
{
    use HasFactory;
    
    protected $table = 'USU_VDEFEITOS';
    protected $fillable = ['despro', 'codlote', 'desetg', 'desdft'];
}
