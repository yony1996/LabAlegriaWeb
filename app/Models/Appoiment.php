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
        'status',
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

    /* static public function createForPatient(Request $request, $userId)
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
    } */
    static public function createForPatient(Request $request, $userId)
    {
        // Validar que viene el array de exámenes
        $validated = $request->validate([
            'exam_ids' => 'required|array',
            'exam_ids.*' => 'exists:exams,id',
            'scheduled_date' => 'required|date',
            'scheduled_time' => 'required|date_format:g:i A'
        ]);

        // Crear el turno base
        $appointment = self::create([
            'user_id' => $userId,
            'scheduled_date' => $validated['scheduled_date'],
            'scheduled_time' => Carbon::createFromFormat('g:i A', $validated['scheduled_time'])
                ->format('H:i:s')
        ]);

        // Sincronizar los exámenes en la tabla pivote
        if ($appointment && isset($validated['exam_ids'])) {
            $appointment->exams()->sync($validated['exam_ids']);
        }

        return $appointment;
    }

    public function scopeAppoiments($query)
    {
        $role = Auth::user()->getRoleNames()->first();
        if ($role === 'Paciente') {
            $query = Appoiment::join('users', 'users.id', '=', 'appoiments.user_id')
                ->join('exams', 'exams.id', '=', 'appoiments.exam_id')
                ->where('user_id', '=', Auth::user()->id)
                ->select("users.*", DB::raw("CONCAT(users.name,' ',users.last_name) as fullname"), 'exams.name as nameExam', 'appoiments.*')
                ->get();
        } else {
            $query = Appoiment::join('users', 'users.id', '=', 'appoiments.user_id')
                ->join('exams', 'exams.id', '=', 'appoiments.exam_id')
                ->select("users.*", DB::raw("CONCAT(users.name,' ',users.last_name) as fullname"), 'exams.name as nameExam', 'appoiments.*')
                ->get();
        }
        return $query;
    }
}
