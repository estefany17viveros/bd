<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Area extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Lista blanca para relaciones incluidas vía URL (?included=...)
    protected $allowIncluded = ['courses', 'teachers'];

    // Relaciones
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    // Scope para filtrar relaciones incluidas desde URL
    public function scopeIncluded(Builder $query)
    {
        $relations = explode(',', request('included'));
        $allowIncluded = collect($this->allowIncluded);

        foreach ($relations as $key => $relationship) {
            if (!$allowIncluded->contains($relationship)) {
                unset($relations[$key]); // elimina relaciones no válidas
            }
        }

        if (!empty($relations)) {
            $query->with($relations); // carga relaciones válidas
        }
    }
}
