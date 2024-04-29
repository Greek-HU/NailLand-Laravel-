<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'price';
    protected $fillable = [
        'price',
    ];
    public function NailType(): BelongsTo
    {
        return $this>BelongsTo(NailType::class);
    }

    public function NailSize(): BelongsTo
    {
        return $this>BelongsTo(NailSize::class);
    }
}
