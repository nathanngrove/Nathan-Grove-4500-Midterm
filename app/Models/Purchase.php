<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'user_id', 'hardware_id'];
    protected $table = 'purchases';
}
