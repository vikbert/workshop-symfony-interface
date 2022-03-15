<?php

declare(strict_types = 1);

namespace App\Service\User;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class UserClientGitHub implements UserClientInterface
{
    private const URL_PROFILE = 'https://api.github.com/users/%s';
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function fetchProfile(string $userName): array
    {
        // ... some logic: refresh api token

        $response = $this->httpClient->request('GET', sprintf(self::URL_PROFILE, $userName));

        // ... some logic

        return json_decode($response->getContent(), true);
    }
}
