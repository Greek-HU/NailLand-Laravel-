<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EyeOpp extends Model
{
    protected $table = 'eyelashes_opportunities';
    protected $fillable = [
        'option',
    ];

    public function EyeTypes() : BelongsToMany
    {
        return $this->belongsToMany(EyeTypes::class, 'eyelashes_groupment', 'opp_id', 'type_id');
    }

    public function Prices() : BelongsToMany
    {
        return $this->belongsToMany(Prices::class, 'eyelashes_groupment', 'opp_id', 'price_id');
    }
}
