<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        $title = "Data User";
        $keyword = request('keyword') ?? '';
        $limit = request('limit') ?? 10;

        $users = User::when(request('keyword'), function ($query) use ($keyword) {
            $query->whereAny(['name', 'username'], 'like', "%" . $keyword . "%");
        })->paginate(request('limit') ?: 10, ["*"], "page", request('page') ?: 1);

        return Inertia::render("User/Index", ["title" => $title, "users" => $users, 'limit' => $limit, 'keyword' => $keyword]);
    }

    public function create()
    {
        $title = "Data User";

        return Inertia::render("User/Index", ["title" => $title]);
    }

    public function store(Request $request)
    {
        $attr = $request->validate([
            "name" => "required|string",
            "username" => "required|unique:users",
            "password" => "required|string",
            "level" => "required|string",
        ]);

        try {
            DB::beginTransaction();

            $attr["password"] = bcrypt($request->password);

            $user = User::create($attr);

            DB::commit();
            return redirect()->route("users.index");
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route("users.index");
        }
    }

    public function show(User $user)
    {
        return response()->json([
            "data" => $user
        ], 200);
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        $attr = $request->validate([
            "name" => "required|string",
            "username" => "required|unique:users,username," . $user->id,
            "level" => "required|string",
        ]);

        try {
            DB::beginTransaction();

            $user->update($attr);

            DB::commit();
            return redirect()->route("users.index");
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route("users.index");
        }
    }

    public function destroy(User $user)
    {
        //
    }
}
