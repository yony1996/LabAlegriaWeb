<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Exam extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'status'
    ];

    public function scopeExams($query)
    {
        return $query->select('id','name', 'description','status');
    }

    static public function createExam(Request $request)
    {

        $data = $request->only([
            'name',
            'description'
        ]);
        if (empty($data['description'])) {
            $data['description'] = "no hay descripcion";
        }
        return self::create($data);
    }

}
