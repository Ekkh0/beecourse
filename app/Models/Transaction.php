<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_date',
        'course_id',
        'total_price'
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function course():BelongsTo{
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }

    public function transaction():HasMany{
        return $this->HasMany(TransactionDetail::class, 'transaction_id', 'id');
    }
}
