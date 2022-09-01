<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user['avatar'] = public_path("avatar/$user->avatar");
            $passport =  $user->createToken(env('APP_NAME'))->accessToken;
            $rol = $user->getRoleNames()->first();
            $success = true;

            $user = Arr::add($user, 'rol', $rol);

            $data = compact('success', 'user', 'passport');
            return $data;
        } else {
            $success = false;
            $message = 'algo ha fallado';
            return compact('success', 'message');
        }
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string'],
            'phone' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'nui' => ['required', 'string', 'max:10', 'min:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'email:rfc,dns'],
            'password' => ['required', 'string', 'min:8'],
        ]);
       
        if ($validator->fails()) {
            return $validator;
        }

        $path = 'avatar/';
        $fontPath = public_path('fonts/Oliciy.ttf');
        $char = strtoupper($request->name[0]);
        $newAvatarName = rand(12, 34353) . time() . '_' . $request->last_name . '_avatar.png';
        $dest = $path . $newAvatarName;

        $createAvatar = makeAvatar($fontPath, $dest, $char);
        $picture = $createAvatar == true ? $newAvatarName : '';
        $request->avatar = $picture;

        $user = User::create([
            'name' => $request->name,
            'avatar' => $request->avatar,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'age' => $request->age,
            'nui' => $request->nui,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('Paciente');

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $passport =  $user->createToken(env('APP_NAME'))->accessToken;
            $rol = $user->getRoleNames()->first();
            $success = true;

            $user['avatar'] = public_path("avatar/$user->avatar");
            $user = Arr::add($user, 'rol', $rol);
            $data = compact('success', 'user', 'passport');
            return $data;
        }
        $success = false;
        $message = 'Ocurrio un error al loguearse';
        $data = compact('success', 'message');
        return $data;
    }

    public function logout(Request $request)
    {
        $accessToken = Auth::user()->token();
        $token = $request->user()->tokens->find($accessToken);
        $token->revoke();
        $success = true;
        $message = 'se ha cerradon con éxito';
        return compact('success', 'message');
    }

    public function info()
    {
        Auth::guard('api')->user();
        $user = Auth::user();
        $user['avatar'] = public_path("avatar/$user->avatar");
        return $user;
    }
}
