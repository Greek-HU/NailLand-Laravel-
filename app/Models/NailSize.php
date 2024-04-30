<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NailSize extends Model
{
    protected $table = 'nail_size';
    protected $fillable = [
        'size_name',
    ];

    public function NailType() : BelongsTo
    {
        return $this->BelongsTo(NailType::class);
    }

    public function Price() : BelongsTo
    {
        return $this->BelongsTo(Price::class);
    }
}
