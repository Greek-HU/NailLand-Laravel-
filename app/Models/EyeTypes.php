<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EyeTypes extends Model
{
    protected $table = 'eyelashes_types';
    protected $fillable = [
        'type',
    ];

    public function EyeOpp() :BelongsToMany
    {
        return $this->belongsToMany(EyeOpp::class, 'eyelashes_groupment', 'type_id', 'opp_id' );
    }

    public function Prices() :BelongsToMany
    {
        return $this->belongsToMany(Prices::class, 'eyelashes_groupment', 'type_id', 'price_id');
    }
}
