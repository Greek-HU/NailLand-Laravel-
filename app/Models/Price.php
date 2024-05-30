<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Price extends Model
{
    protected $table = 'price';
    
    
    public function NailType() : BelongsTo
    {
        return $this->BelongsTo(NailType::class);
    }

    public function NailSize()
    {
        return $this->belongsToMany(NailSize::class, 'size_price', 'price_id', 'size_id' );
    }
}
