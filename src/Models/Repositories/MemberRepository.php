<?php

namespace Story\Cms\Models\Repositories;

use Story\Cms\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberRepository
{
    public function all()
    {
        return User::paginate();
    }

    public function create(Request $request)
    {
        return $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role_id' => $request->input('role'),
        ]);
    }

    public function findById($id)
    {
        return User::findOrFail($id);
    }

    public function update(User $user, Request $request)
    {
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->input('password') != '') {
            $user->password = Hash::make($request->input('password'));
        }
        $user->role_id = $request->input('role');

        return $user->save();
    }

    public function delete($id)
    {
        $user = $this->findById($id);

        return $user->delete();
    }
}