<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Result;
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

    public function edit($id)
    {
        $exam = Exam::findOrfail($id);
        return view('Admin.Exams.edit', compact('exam'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required', 'string', 'max:255',
            'description' => 'sometimes', 'string',
        ];
        $this->validate($request, $rules);
        Exam::find($id)->update($request->all());
        return redirect()->route('exam')->with('status', 'Examen editado correctamente.');
    }

    public function loadExams(Request $request)
    {
        if ($request->ajax()) {
            $data = Exam::Exams();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    if ($row->status == 1) {
                        $btn = '<button class="btn btn-warning m-2" id ="statusExam" data-id="' . $row->id . '" data-status="' . $row->status . '"><i class="fa fa-ban"></i></button>';
                    } else {
                        $btn = '<button class="btn btn-success m-2" id ="statusExam" data-id="' . $row->id . '" data-status="' . $row->status . '"><i class="fa fa-check-circle"></i></button>';
                    }

                    $btn = $btn . '<a href=' . route("exam.edit", $row->id) . ' class="edit btn btn-primary btn-sm m-2"><i class="fa fa-pen"></i></a>';

                    $btn = $btn . '<button class="btn btn-danger m-2" id ="deleteUser" data-id="' . $row->id . '"><i class="fa fa-trash"></i></button>';
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
        $request->validate([
            'name' => 'required', 'string',
            'description' =>  'sometimes','string'
        ]);
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
        if ($request->status == 1) {
            $status = Exam::findOrfail($id)->update(['status' => 0]);
        } else {
            $status = Exam::findOrfail($id)->update(['status' => 1]);
        }
        if ($status) {
            $notification = "se ha cambiado el estatus";
        }
        return response()->json(['success' => $notification]);
    }

    public function create(Request $request)
    {
        return view('Admin.Exams.create');
    }
}
