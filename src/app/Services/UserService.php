<?php

namespace App\Services;

use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class UserService
{

    public function update(UpdateUserRequest $request, User $user): User
    {
        $data = $request->validated();

        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return $user;
    }

    public function delete(User $user, User $actingUser): void
    {
        // 🔒 Zabráníme smazání sebe sama
        if ($actingUser->id === $user->id) {
            throw ValidationException::withMessages([
                'user' => 'You cannot delete yourself.',
            ]);
        }

        // Business rule: musí existovat alespoň jeden admin
        if (
            $user->role === 'admin' &&
            User::where('role', 'admin')->count() <= 1
        ) {
            throw ValidationException::withMessages([
                'user' => 'There must be at least one admin.',
            ]);
        }

        $user->delete();
    }

}
