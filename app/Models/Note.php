<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Hardware;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'service_type', 'service_notes'];
    protected $table = 'notes';
    public $timestamps = false;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
