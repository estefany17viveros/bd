<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apprentice extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'cell_number', 'course_id', 'computer_id'];
    protected $allowIncluded = ['course', 'computer'];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function computer() {
        return $this->belongsTo(Computer::class);
    }

    public function scopeIncluded(Builder $query) {
        $relations = explode(',', request('included', ''));
        $relations = array_filter($relations, fn($r) => in_array($r, $this->allowIncluded));
        if (!empty($relations)) $query->with($relations);
    }
}
