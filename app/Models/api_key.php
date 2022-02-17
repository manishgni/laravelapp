<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class api_key extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'api_key',
        'secret_key',
        'package_id',
    ];
}
