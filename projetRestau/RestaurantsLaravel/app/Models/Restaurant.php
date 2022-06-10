<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurant';
    public $timestamps = false;
    protected $fillable = ['name', 'address', 'zipCode', 'town', 'country', 'description', 'review'];
}
