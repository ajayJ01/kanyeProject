<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;


class quoteUser extends Model
{
    use HasFactory, HasApiTokens, AuthenticatableTrait;

    protected $table = 'quoteusers';

    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
    ];

    protected $hidden = [
        'remember_token',
    ];

}
