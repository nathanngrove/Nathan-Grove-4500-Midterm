<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Hardware;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['service_type', 'user_id', 'hardware_id'];
    protected $table = 'notes';

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function hardware()
    {
        return $this->belongsTo(Hardware::class);
    }
}
