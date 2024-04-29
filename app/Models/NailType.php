<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NailType extends Model
{
    protected $table = 'nailTypes';
    protected $fillable = [
        'nailName',
    ];

    public function NailSize() : BelongsTo
    {
        return $this->belongsTo(NailSize::class);
    }

    public function Price() :BelongsTo
    {
        return $this->BelongsTo(Price::class);
    }
}

