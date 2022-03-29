<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Manufacturer;
use App\Models\Employee;
use App\Models\Purchase;

class Hardware extends Model
{
    use HasFactory;
    protected $fillable = ['manufacturer_id', 'cpu', 'gpu', 'ram', 'type'];
    protected $table = 'hardwares';
    public $timestamps = false;

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function purchase()
    {
        return $this->hasMany(Purchase::class);
    }
}
