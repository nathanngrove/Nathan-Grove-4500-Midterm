<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    use HasFactory;
    protected $fillable = ['cpu', 'gpu', 'ram', 'type'];
    protected $table = 'hardwares';
}
