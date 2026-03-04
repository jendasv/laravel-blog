<?php

namespace Tests\Feature;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserPolicyTest extends TestCase
{

    use RefreshDatabase;

    public function test_admin_can_delete_user(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $user = User::factory()->create();

        $this->actingAs($admin);

        $response = $this->delete(route('admin.users.destroy', $user));

        $response->assertRedirect();

        $this->assertDatabaseMissing('users', [
            'id' => $user->id,
        ]);
    }

    public function test_non_admin_cannot_delete_user(): void
    {
        $user = User::factory()->create(['role' => 'user',]);
        $target = User::factory()->create();

        $this->actingAs($user);

        $response = $this->delete(route('admin.users.destroy', $target));

        $response->assertForbidden();
    }

}
