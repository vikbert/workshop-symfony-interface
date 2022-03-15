<?php

declare(strict_types = 1);

namespace App\Service\User;

final class UserManager
{
    private UserClientInterface $userClient;

    public function __construct(UserClientInterface $userClient)
    {
        $this->userClient = $userClient;
    }

    public function getAvatar(string $userName): string
    {
        // ... some logic

        $profile = $this->userClient->fetchProfile($userName);

        // ... some logic

        return $profile['avatar_url'];
    }
}
