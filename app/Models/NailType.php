<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NailType extends Model
{
    protected $table = 'nailType';
    protected $fillable = [
        'nailName',
    ];

    public function NailSize(): BelongsTo
    {
        return $this>BelongsTo(NailSize::class);
    }

    public function Price(): BelongsTo
    {
        return $this>BelongsTo(Price::class);
    }
}

