<?php

namespace Tests\Unit;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */

    public function a_user_has_campaigns()
    {
        $user = User::factory()->create();
        $this->assertInstanceOf(Collection::class, $user->campaigns);
    }
}
