<?php

declare(strict_types = 1);

namespace App\Module\SIAM;

interface OpenID extends SingleSignOnInterface
{
    public function sso(): void;
}
