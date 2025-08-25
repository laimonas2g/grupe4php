<?php

namespace Bebro\Blogas\Services;

use Bebro\Blogas\Models\User;

class Auth
{
    public static function user(): ?User
    {
        if (!isset($_SESSION['user_id'])) {
            return null;
        }

        return User::find($_SESSION['user_id']);
    }

    public static function check(): bool
    {
        return self::user() !== null;
    }

    public static function login(User $user): void
    {
        $_SESSION['user_id'] = $user->id;
    }

    public static function logout(): void
    {
        unset($_SESSION['user_id']);
    }
}