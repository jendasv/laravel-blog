<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    public function __construct(private UserService $userService) {}

    public function index()
    {
        $users = User::all();

        return view('admin.user.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
//        $data = $request->validated();
//
//        if (!empty($data['password'])) {
//            $data['password'] = bcrypt($data['password']);
//        } else {
//            unset($data['password']);
//        }
//
//        $user->update($data);

        $this->userService->update($request, $user);

        return redirect()
            ->route('admin.users.edit', compact('user'))
            ->with('success', 'User updated successfully!');
    }

    public function destroy(User $user)
    {
        $this->authorize('delete', $user);

        try {
            $this->userService->delete($user, auth()->user());

            return redirect()
                ->route('admin.users.index')
                ->with('success', 'User deleted successfully!');
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors());
        }
    }

}
