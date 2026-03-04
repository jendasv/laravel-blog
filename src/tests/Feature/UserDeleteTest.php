<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserDeleteTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function non_admin_gets_403_when_trying_to_delete_user(): void
    {
        $user = User::factory()->create(['role' => 'user']);
        $target = User::factory()->create();

        $this->actingAs($user);

        $response = $this->delete(route('admin.users.destroy', $target));

        $response->assertForbidden();
    }

    /** @test */
    public function admin_can_delete_other_user(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $user = User::factory()->create(['role' => 'user']);

        $this->actingAs($admin);

        $response = $this->delete(route('admin.users.destroy', $user));

        $response->assertRedirect(route('admin.users.index'));

        $this->assertDatabaseMissing('users', [
            'id' => $user->id,
        ]);
    }

    /** @test */
    public function admin_cannot_delete_self(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $this->actingAs($admin);

        $response = $this->delete(route('admin.users.destroy', $admin));

        $response->assertSessionHasErrors('user');

        $this->assertDatabaseHas('users', [
            'id' => $admin->id,
        ]);
    }

    /** @test */
    public function admin_cannot_delete_last_admin(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $this->actingAs($admin);

        $response = $this->delete(route('admin.users.destroy', $admin));

        $response->assertSessionHasErrors('user');

        $this->assertDatabaseHas('users', [
            'id' => $admin->id,
        ]);
    }
}
