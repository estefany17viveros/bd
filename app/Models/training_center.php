<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TrainingCenter extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location'];
    protected $allowIncluded = ['teachers', 'courses'];

    public function teachers() {
        return $this->hasMany(Teacher::class);
    }

    public function courses() {
        return $this->hasMany(Course::class);
    }

    public function scopeIncluded(Builder $query) {
        $relations = explode(',', request('included', ''));
        $relations = array_filter($relations, fn($r) => in_array($r, $this->allowIncluded));
        if (!empty($relations)) $query->with($relations);
    }
}
