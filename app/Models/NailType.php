<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NailType extends Model
{
    protected $table = 'nail_type';
    protected $fillable = [
        'type',
        'size_title',
        'price_title',
    ];

    public function NailSize() : BelongsTo
    {
        return $this->belongsTo(NailSize::class, 'type_size');
    }

    public function Price() :BelongsTo
    {
        return $this->BelongsTo(Price::class);
    }
}

