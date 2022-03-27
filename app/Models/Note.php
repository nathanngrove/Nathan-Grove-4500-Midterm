<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Hardware;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['service_type', 'hardware_id'];
    protected $table = 'notes';

    public function hardware()
    {
        return $this->belongsTo(Hardware::class);
    }
}
