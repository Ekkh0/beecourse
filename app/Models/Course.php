<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserCourse;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'publish_date',
        'price',
        'rating',
        'tutor',
    ];
    public function content():HasMany {
        return $this->hasMany(Content::class, 'course_id', 'id');
    }


    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
