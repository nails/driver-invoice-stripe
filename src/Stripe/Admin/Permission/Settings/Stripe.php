<?php

namespace Nails\Invoice\Driver\Payment\Stripe\Admin\Permission\Settings;

use Nails\Admin\Interfaces\Permission;

class Stripe implements Permission
{
    public function label(): string
    {
        return 'Can manage Stripe settings';
    }

    public function group(): string
    {
        return 'Settings';
    }
}
