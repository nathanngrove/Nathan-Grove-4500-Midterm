<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Hardware;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'user_id', 'hardware_id'];
    protected $table = 'purchases';

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function hardware()
    {
        return $this->hasOne(Hardware::class);
    }
}
