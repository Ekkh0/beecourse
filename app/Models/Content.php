<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Content extends Model
{
    use HasFactory;
    public $table = 'contents';
    protected $fillable = [
        'course_id',
        'course_url',
        'duration',
        'description'
    ];


    public function course():BelongsTo {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
