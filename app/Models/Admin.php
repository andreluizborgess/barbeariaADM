<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Model
{
   
    use HasFactory;
    use HasApiTokens;
    use Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
