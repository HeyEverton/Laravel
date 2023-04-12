<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Advertise extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'is_negotiable',
        'description',
        'user_id',
        'category_id',
        'state_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function advertise(): BelongsTo
    {
        return $this->belongsTo(Advertise::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
