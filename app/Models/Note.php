<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['purchase_id', 'service_type', 'service_notes'];
    protected $table = 'notes';

    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
}
