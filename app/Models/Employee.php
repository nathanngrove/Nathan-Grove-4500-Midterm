<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hardware;
use App\Models\Purchase;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone'];
    protected $table = 'employees';
    public $timestamps = false;

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function hardwares()
    {
        return $this->hasMany(Hardware::class);
    }
}
