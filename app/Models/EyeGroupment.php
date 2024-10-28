<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EyeGroupment extends Model
{
    use HasFactory;
    protected $table = 'eyelashes_groupment';
    protected $fillable = [
        'type_id',
        'opp_id',
        'price_id'
    ];

    public function EyeTypes() : BelongsToMany
    {
        return $this->belongsToMany(EyeTypes::class, 'eyelashes_groupment', 'type_id');
    }
    public function EyeOpp() : BelongsToMany
    {
        $this->belongsToMany(EyeOpp::class, 'eyelashes_groupment', 'opp_id');
    }
    public function Prices() : BelongsToMany
    {
        return $this->belongsToMany(Prices::class, 'eyelashes_groupment', 'price_id');
    }}
