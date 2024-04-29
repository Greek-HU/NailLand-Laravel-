<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nail extends Model
{
    protected $table = 'nails';
    protected $fillable = [
        'name',
    ];

   
    public function NailType(): BelongsTo
    {
        return $this>BelongsTo(NailType::class);
    }

    public function Price(): BelongsTo
    {
        return $this>BelongsTo(Price::class);
    }
}
