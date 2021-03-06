<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Appoiment extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'exam_id',
        'scheduled_date',
        'scheduled_time',
        'created_at',
        'updated_at',
        'type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    static public function createForPatient(Request $request, $userId)
    {

        $data = $request->only([
            'user_id',
            'exam_id',
            'scheduled_date',
            'scheduled_time',
        ]);
        $data['user_id'] = $userId;

        $carbonTime = Carbon::createFromFormat('g:i A', $data['scheduled_time']);
        $data['scheduled_time'] = $carbonTime->format('H:i:s');

        return self::create($data);
    }

    public function scopeAppoiments($query)
    {
        $role = Auth::user()->getRoleNames()->first();
        if ($role === 'Paciente') {
            $query = Appoiment::join('users', 'users.id', '=', 'appoiments.user_id')
                ->join('exams', 'exams.id', '=', 'appoiments.exam_id')
                ->where('user_id', '=', Auth::user()->id)
                ->select("users.*", DB::raw("CONCAT(users.name,' ',users.last_name) as fullName"), 'exams.name as nameExam', 'appoiments.*')
                ->get();
        } else {
            $query = Appoiment::join('users', 'users.id', '=', 'appoiments.user_id')
                ->join('exams', 'exams.id', '=', 'appoiments.exam_id')
                ->select("users.*", DB::raw("CONCAT(users.name,' ',users.last_name) as fullName"), 'exams.name as nameExam', 'appoiments.*')
                ->get();
        }
        return $query;
    }
}
