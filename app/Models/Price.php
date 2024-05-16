<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Price extends Model
{
    protected $table = 'prices';
    protected $fillable = [
        'price',
    ];
    
    public function NailType() : BelongsTo
    {
        return $this->BelongsTo(NailType::class);
    }

    public function NailSize() : BelongsTo
    {
        return $this->BelongsTo(NailSize::class, 'size_price');
    }
}
