<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'phone', 'email', 'support_phone', 'support_email'];
    protected $table = 'manufacturers';
}
