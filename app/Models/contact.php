<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'email',
        'budget',
        'subject',
        'message',
    ];

    protected $table='contacts';
}
