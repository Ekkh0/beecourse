<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransactionDetail extends Model
{
    use HasFactory;

    public $table = 'transaction_details';
    protected $fillable = [
        'course_id',
        'transaction_id'
    ];



    public function course():BelongsTo{
        return $this->belongsTo(Course::class, 'course_id', 'id');

    }

    public function transaction():BelongsTo{
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

}
