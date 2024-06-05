<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;
    protected $table = 'drugs';
    protected $fillable = [
        'item_id',
        'komposisi',
        'side_effect',
        'dosage',
        'using_guide',
    ];
}
