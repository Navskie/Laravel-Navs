<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    // protected $guarded = []; pag array
    protected $guarded = []; #pag lahat
    use HasFactory;
}
