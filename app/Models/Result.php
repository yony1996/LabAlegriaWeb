<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id','user_id', 'doctor', 'orden', 'type','fechaMu', 'hematologia', 'coprologico', 'orina', 'covid','created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
