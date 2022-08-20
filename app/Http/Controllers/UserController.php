<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

                    if ($row->status == 1) {
                        $btn = '<button class="btn btn-warning m-2" id ="statusUser" data-id="' . $row->id . '" data-status="' . $row->status . '"><i class="fa fa-ban"></i></button>';
                    } else {
                        $btn = '<button class="btn btn-success m-2" id ="statusUser" data-id="' . $row->id . '" data-status="' . $row->status . '"><i class="fa fa-check-circle"></i></button>';
                    }

                    $btn = $btn . '<a href=' . route("user.edit", $row->id) . ' class="edit btn btn-primary btn-sm m-2"><i class="fa fa-pen"></i></a>';

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
        $path = 'avatar/';
        $fontPath = public_path('fonts/Oliciy.ttf');
        $char = strtoupper($request['name'][0]);
        $newAvatarName = rand(12, 34353) . time() . '_avatar.png';
        $dest = $path . $newAvatarName;

        $createAvatar = makeAvatar($fontPath, $dest, $char);
        $picture = $createAvatar == true ? $newAvatarName : '';
        $request['avatar'] = $picture;

        $request['password'] = $request['nui'];

        $user = User::create([
            'avatar' => $request['avatar'],
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'gender' => $request['gender'],
            'phone' => $request['phone'],
            'age' => $request['age'],
            'nui' => $request['nui'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $user->assignRole('Paciente');
        if ($user) {
            $notification = "Paciente registrado";
            return response()->json(['success' => $notification]);
        } else {
            $error = "Ocurrio un error";
            return response()->json(['error' => $error]);
        }
    }

    public function destroy($id)
    {
        $user = User::findOrfail($id)->delete();
        if ($user) {
            $notification = 'Eliminado con exito';
            return response()->json(['success' => $notification]);
        } else {
            $notification = 'Ocurrio un error';
            return response()->json(['success' => $notification]);
        }
    }

    public function edit($id)
    {
        $user = User::findOrfail($id);
        return view('Admin.User.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required', 'string', 'max:255',
            'last_name' => 'required', 'string', 'max:255',
            'gender' => 'required', 'string',
            'phone' => 'required', 'string', 'max:255',
            'password' => 'sometimes', 'string',
            'age' => 'required', 'string', 'max:255',
            'nui' => 'required', 'string', 'max:10', 'min:10', 'unique:users',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users', 'email:rfc,dns',
        ];
        $this->validate($request, $rules);

        if (!empty($request['password'])) {
            $request['password'] = Hash::make($request['password']);
        } else {
            unset($request['password']);
        }

        User::find($id)->update($request->all());
        return redirect()->route('users')->with('status', 'Usuario editado correctamente.');
    }

    public function bannedUser(Request $request, $id)
    {
        if ($request->status == 1) {
            $user = User::findOrfail($id)->update(['status' => 0]);
        } else {
            $user = User::findOrfail($id)->update(['status' => 1]);
        }

        if ($user) {
            $notification = 'El status del usuario ha sido cambiado';
            return response()->json(['success' => $notification]);
        } else {
            $notification = 'Ocurrio un error';
            return response()->json(['success' => $notification]);
        }
    }

    public function autocomplete(Request $request)
    {
        $data = User::select("nui as value", "id", DB::raw("CONCAT(users.name,' ',users.last_name) as fullname"), "age", "gender")
            ->where('nui', 'LIKE', '%' . $request->get('search') . '%')
            ->get();
        return response()->json($data);
    }
}
