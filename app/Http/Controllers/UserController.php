<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    public function register(Request $request)
    {
        $result = Http::get('https://project.bintorocorp.co.id/api/area/province', [
            'page' => 2
        ]);

        $res = json_decode($result->body());

        return response()->json($res);
    }
}
