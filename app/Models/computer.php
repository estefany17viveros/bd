<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Computer extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'brand'];
    protected $allowIncluded = ['apprentices'];

    public function apprentices() {
        return $this->hasMany(Apprentice::class);
    }

    public function scopeIncluded(Builder $query) {
        $relations = explode(',', request('included', ''));
        $relations = array_filter($relations, fn($r) => in_array($r, $this->allowIncluded));
        if (!empty($relations)) $query->with($relations);
    }
}
