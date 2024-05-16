<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SizePrice extends Model
{
    protected $table = 'size_price';
    protected $fillable = [ 'size_id', 'price_id' ];

    public function NailSize() : BelongsTo
    {
        return $this->BelongsTo(NailSize::class);
    }

    public function Price() : BelongsTo
    {
        return $this->BelongsTo(Price::class);
    }
}
