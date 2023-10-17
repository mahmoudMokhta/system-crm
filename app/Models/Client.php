<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class client extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'contact_num_one',
        'contact_num_two',
        'email',
        'status',
        'unit_id',
        'user_id',
        'notes',
    ];

    public function units(): HasMany
    {
        return $this->hasMany(Unit::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
