<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;


class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function getUsers()
    {
       $users = User::where('state', '1')->get();
       return response()->json($users, 200);
    }

    public function store(Request $request)
    {
        $user = new user();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->gender = $request->gender;
        $Validate = $this->ValidateUser($request);
        if ($Validate) {
            $user->save();
            return response()->json(true, 200);
        } else {
            return response()->json($Validate, 200);
        }
    }

    public function ValidateUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return "Ya existe un usuario con este correo.";
        } else {
            return true;
        }
    }
}
