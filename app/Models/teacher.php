<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'area_id', 'training_center_id'];
    protected $allowIncluded = ['area', 'trainingCenter', 'courses'];

    public function area() {
        return $this->belongsTo(Area::class);
    }

    public function trainingCenter() {
        return $this->belongsTo(TrainingCenter::class);
    }

    public function courses() {
        return $this->belongsToMany(Course::class, 'course_teacher');
    }

    public function scopeIncluded(Builder $query) {
        $relations = explode(',', request('included', ''));
        $relations = array_filter($relations, fn($r) => in_array($r, $this->allowIncluded));
        if (!empty($relations)) $query->with($relations);
    }
}
