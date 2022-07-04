<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('Admin.User.index');
    }

    public function loadUsers(Request $request)
    {
        if ($request->ajax()) {
            $data = User::Users();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {



                    $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm">Desactivar</a>';

                    $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Editar</a>';

                    $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm">Eliminar</a>';



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
}
