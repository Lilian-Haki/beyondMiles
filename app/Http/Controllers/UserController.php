<?php

namespace App\Http\Controllers;

use App\Filters\UserFilter;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
{
    $request->validate([
        'email'    => 'required|email',
        'password' => 'required',
    ]);

    if (!Auth::attempt($request->only('email', 'password'))) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    $user  = Auth::user();
    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'user'  => $user,
        'token' => $token,
    ]);
}
    public function index(Request $request, UserFilter $filter)
    {
        $userQuery = User::filter($filter)->with('orders');

        return $userQuery->paginate($request->input('per', 20));
    }

    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        return response()->json($user->load('orders'), 201);
    }

    public function show(User $user)
    {
        $user->load(['orders']);
        return response()->json($user);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        $user->update($data);
        return response()->json($user->load('orders'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->noContent();
    }
}