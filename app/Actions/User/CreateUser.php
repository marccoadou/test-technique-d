<?php

namespace App\Actions\User;

use App\Models\User;
use App\Providers\UserCreated;

class CreateUser
{
    public static function make(array $userData): void
    {
        $user = User::create([
            'name'     => $userData['name'],
            'password' => $userData['password'],
            'email'    => $userData['email'],
        ]);

        // Dispatch d'un event à la création de l'user
        UserCreated::dispatch($user);
    }
}
