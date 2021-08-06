<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class Vendor extends Authenticable
{
    use HasFactory;

    protected $guard = 'vendor';

    protected $fillable = [
        'email', 'password', 'franchise', 'first_name', 'last_name',
    ];
}
