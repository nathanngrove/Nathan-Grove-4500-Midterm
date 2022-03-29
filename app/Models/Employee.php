<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hardware;
use App\Models\Note;
use App\Models\Purchase;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone'];
    protected $table = 'employees';
    public $timestamps = false;

    public function hardwares()
    {
        return $this->hasMany(Hardware::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
