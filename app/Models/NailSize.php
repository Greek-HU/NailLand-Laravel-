<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NailSize extends Model
{
    protected $table = 'nail_size';
    

    public function NailType() : BelongsTo
    {
        return $this->BelongsTo(NailType::class, 'type_size');
    }

    public function prices()
    {
        return $this->belongsToMany(Price::class,'size_price', 'size_id', 'price_id');
    }
}
