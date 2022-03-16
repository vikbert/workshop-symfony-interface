<?php

declare(strict_types = 1);

namespace App\Module\SIAM;

interface OAuth2 extends SingleSignOnInterface
{
    public function sso(): void;
}
