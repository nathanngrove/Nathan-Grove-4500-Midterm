<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\Hardware;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['service_type', 'user_id', 'hardware_id'];
    protected $table = 'notes';

    public function person()
    {
        return $this->hasOne(Person::class);
    }

    public function hardware()
    {
        return $this->belongsTo(Hardware::class);
    }
}
