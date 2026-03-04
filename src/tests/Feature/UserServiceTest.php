<?php

namespace Tests\Feature;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class UserServiceTest extends TestCase
{

    public function test_admin_cannot_delete_self(): void
    {
        $admin = User::factory()->create([
            'role' => 'admin',
        ]);

        $service = new UserService();

        $this->expectException(ValidationException::class);

        $service->delete($admin, $admin);
    }

    public function test_cannot_delete_last_admin(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $service = new UserService();

        $this->expectException(ValidationException::class);

        $service->delete($admin, $admin);
    }

    public function test_can_delete_admin_if_another_exist(): void
    {
        $admin1 = User::factory()->create(['role' => 'admin']);
        $admin2 = User::factory()->create(['role' => 'admin']);

        $service = new UserService();
        $service->delete($admin1, $admin2);

        $this->assertDatabaseMissing('users', [
            'id' => $admin1->id,
        ]);
    }

}
