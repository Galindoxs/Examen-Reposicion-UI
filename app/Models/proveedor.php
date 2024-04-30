<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{

     protected $table = 'proveedores';

     public $timestamps = false;
    use HasFactory;
}
