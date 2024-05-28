<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'komposisi',
        'side_effect',
        'dosage',
        'using_guide',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}