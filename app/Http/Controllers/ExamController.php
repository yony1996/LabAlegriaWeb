<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Admin.Exams.index');
    }

    public function loadExams(Request $request)
    {
        if ($request->ajax()) {
            $data = Exam::Exams();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    if($row->status == 1){
                        $btn = '<button class="btn" id ="statusExam" data-id="' . $row->id . '" data-status="' . $row->status . '">Desactivar</button>';    
                    }else{
                        $btn = '<button class="btn" id ="statusExam" data-id="' . $row->id . '" data-status="' . $row->status . '">Activar</button>';
                    }
                    
                    $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Editar</a>';

                    $btn = $btn . '<button class="btn" id ="deleteExam" data-id="' . $row->id . '">Delete</button>';
                    return $btn;
                })
                ->addColumn('status', function ($row) {
                    if ($row->status == 1) {
                        $status = '<label class="badge badge-success  badge-pill"> Activo </label>';
                    } else {
                        $status = '<label class="badge badge-danger  badge-pill">Inactivo </label>';
                    }
                    return $status;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
    }

    public function store(Request $request)
    {
        $exam = Exam::createExam($request);
        if ($exam) {
            $notification = "Examen registrado";
            return response()->json(['success' => $notification]);
        } else {
            $error = "Ocurrio un error";
            return response()->json(['error' => $error]);
        }
    }
    public function destroy($id)
    {
        $exam = Exam::findOrfail($id)->delete();
        if ($exam) {
            $notification = 'Eliminado con exito';
            return response()->json(['success' => $notification]);
        } else {
            $notification = 'Ocurrio un error';
            return response()->json(['success' => $notification]);
        }
    }
    public function changeStatus(Request $request, $id)
    {
        if($request->status == 1){
            $status=Exam::findOrfail($id)->update(['status'=>0]);
        }else{
            $status=Exam::findOrfail($id)->update(['status'=>1]);
        }
        return response()->json(['success'=>$status]);
        
    }
}
