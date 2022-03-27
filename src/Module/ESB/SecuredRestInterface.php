<?php

declare(strict_types = 1);

namespace App\Module\ESB;

interface SecuredRestInterface
{
    /**
     * For secured Restful resource on ESB,
     * the access token should be refreshed and cached for predefined interval
     *
     * Default caching: 20 minutes
     */
    public function refreshAccessToken(): void;
}
