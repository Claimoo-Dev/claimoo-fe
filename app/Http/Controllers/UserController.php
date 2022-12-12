<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function select2(Request $request)
    {
        $search = $request->q;

        $result = User::selectRaw('id, name')->when($search, function ($query) use ($search) {
            $query->where('name', 'LIKE', "%$search%");
        })->get();

        return response()->json($result);
    }

    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return $user;
    }
}
