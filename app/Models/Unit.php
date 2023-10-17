<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class unit extends Model
{

    use HasFactory;

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
    protected  $fillable = [
        'unit_number',
        'building_number',
        'street_name',
        'city',
        'type',
        'price',
        'square_feet',
        'bedrooms',
        'bathrooms',
        'garage',
        'pool',
        'description',
        'status'
    ];



    public function clients(): BelongsTo
    {
        return $this->belongsto(Client::class);
    }
    public function photos(): HasMany
    {
        return $this->hasMany(UnitPhoto::class);
    }
}
