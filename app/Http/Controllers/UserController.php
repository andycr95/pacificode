<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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

    public function getUser(Request $request)
    {
       $user = User::find($request->id);
       return response()->json($user, 200);
    }

    public function store(Request $request)
    {
        $user = new user();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->linkedin = $request->linkedin;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->position = $request->position;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->marital_status = $request->marital_status;
        $user->birth_date = $request->birth_date;
        if ($request->photo_profile) {
            $base64_str = substr($request->photo_profile, strpos($request->photo_profile, ",")+1);
            $image = base64_decode($base64_str);
            $timestampName = microtime(true) . '.jpg';
            $user->photo_profile ='https://cloud.pacificode.co/users/'.$timestampName;
            Storage::disk('do')->put('users/'.$timestampName, $image, 'public');
        } else {
            $user->photo_profile = "img/avatars/user.png";
        }
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
            'email' => ['required', 'string', 'email', 'max:25', 'unique:users'],
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return "Ya existe un usuario con este correo.";
        } else {
            return true;
        }
    }

    public function update($id, Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->linkedin = $request->linkedin;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->position = $request->position;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->marital_status = $request->marital_status;
        $user->birth_date = $request->birth_date;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        if ($request->photo_profile) {
            $base64_str = substr($request->photo_profile, strpos($request->photo_profile, ",")+1);
            $image = base64_decode($base64_str);
            $timestampName = microtime(true) . '.jpg';
            $user->photo_profile ='https://cloud.pacificode.co/users/'.$timestampName;
            Storage::disk('do')->put('users/'.$timestampName, $image, 'public');
        } else {
            $user->photo_profile = "img/avatars/user.png";
        }
        if ($user->email == $request->email) {
            $user->save();
            return response()->json(true, 200);
        } else {
            $Validate = $this->ValidateUser($request);
            if ($Validate) {
                $user->save();
                return response()->json(true, 200);
            } else {
                return response()->json($Validate, 200);
            }
        }

    }

    public function updatePhoto($id, Request $request)
    {
        $user = User::find($request->id);
        if ($request->photo_profile) {
            $base64_str = substr($request->photo_profile, strpos($request->photo_profile, ",")+1);
            $image = base64_decode($base64_str);
            $timestampName = microtime(true) . '.jpg';
            $user->photo_profile ='https://cloud.pacificode.co/users/'.$timestampName;
            Storage::disk('do')->put('users/'.$timestampName, $image, 'public');
        } else {
            $user->photo_profile = "img/avatars/user.png";
        }
        $user->save();
        return response()->json(true, 200);
    }

    public function updatePhotoPort($id, Request $request)
    {
        $user = User::find($request->id);
        if ($request->photo_port) {
            $base64_str = substr($request->photo_port, strpos($request->photo_port, ",")+1);
            $image = base64_decode($base64_str);
            $timestampName = microtime(true) . '.jpg';
            $user->photo_pro ='https://cloud.pacificode.co/users/cover_pages/'.$timestampName;
            Storage::disk('do')->put('users/cover_pages/'.$timestampName, $image, 'public');
        } else {
            $user->photo_pro = "img/avatars/user.png";
        }
        $user->save();
        return response()->json(true, 200);
    }

    public function updateDesc($id, Request $request)
    {
        $user = User::find($request->id);
        $user->description = $request->description;
        $user->save();
        return response()->json(true, 200);
    }
}
