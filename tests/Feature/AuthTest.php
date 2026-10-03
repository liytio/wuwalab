<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register(): void
    {
        $response = $this->post('/register', [
            'name' => 'Rover',
            'email' => 'rover@example.com',
            'password' => 'rahasia123',
            'password_confirmation' => 'rahasia123',
        ]);

        $response->assertRedirect(route('builds.index'));
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', ['email' => 'rover@example.com']);
    }

    public function test_register_rejects_password_without_numbers(): void
    {
        $this->post('/register', [
            'name' => 'Rover',
            'email' => 'rover@example.com',
            'password' => 'hanyahuruf',
            'password_confirmation' => 'hanyahuruf',
        ])->assertSessionHasErrors('password');

        $this->assertGuest();
    }

    public function test_register_rejects_duplicate_email(): void
    {
        User::factory()->create(['email' => 'rover@example.com']);

        $this->post('/register', [
            'name' => 'Rover',
            'email' => 'rover@example.com',
            'password' => 'rahasia123',
            'password_confirmation' => 'rahasia123',
        ])->assertSessionHasErrors('email');
    }

    public function test_user_can_login_and_logout(): void
    {
        $user = User::factory()->create(['password' => 'rahasia123']);

        $this->post('/login', ['email' => $user->email, 'password' => 'rahasia123'])
            ->assertRedirect(route('builds.index'));
        $this->assertAuthenticatedAs($user);

        $this->post('/logout')->assertRedirect('/');
        $this->assertGuest();
    }

    public function test_login_fails_with_wrong_password(): void
    {
        $user = User::factory()->create(['password' => 'rahasia123']);

        $this->post('/login', ['email' => $user->email, 'password' => 'salah12345'])
            ->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_login_is_locked_after_five_failed_attempts(): void
    {
        $user = User::factory()->create(['password' => 'rahasia123']);

        for ($i = 0; $i < 5; $i++) {
            $this->post('/login', ['email' => $user->email, 'password' => 'salah12345']);
        }

        // Percobaan ke-6 dengan password benar tetap ditolak
        $this->post('/login', ['email' => $user->email, 'password' => 'rahasia123'])
            ->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_user_can_reset_password(): void
    {
        Notification::fake();
        $user = User::factory()->create();

        $this->post('/forgot-password', ['email' => $user->email])->assertSessionHas('success');

        Notification::assertSentTo($user, ResetPassword::class, function (ResetPassword $notification) use ($user) {
            $this->post('/reset-password', [
                'token' => $notification->token,
                'email' => $user->email,
                'password' => 'passwordbaru1',
                'password_confirmation' => 'passwordbaru1',
            ])->assertRedirect(route('login'));

            return Hash::check('passwordbaru1', $user->fresh()->password);
        });
    }

    public function test_forgot_password_does_not_reveal_unknown_email(): void
    {
        $this->post('/forgot-password', ['email' => 'tidakada@example.com'])
            ->assertSessionHas('success')
            ->assertSessionHasNoErrors();
    }

    public function test_guest_is_redirected_to_login_for_protected_pages(): void
    {
        $this->get('/builds')->assertRedirect(route('login'));
        $this->get('/teams')->assertRedirect(route('login'));
    }
}
