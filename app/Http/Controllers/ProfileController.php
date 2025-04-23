<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', [
            'user' => auth()->user()
        ]);
    }

    public function update(ProfileRequest $request)
    {
        $user = auth()->user();

        $data = $request->validated();

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user->update($data);

        return to_route('profile')->with('success', 'Profile updated');
    }
}
