<?php
namespace OmarPackage;

/**
 *
 */
class Controller extends ElectronicItem implements Item
{
    // No Extra
    const MAX_EXTRAS = 0;

    public function maxExtras()
    {
        return static::MAX_EXTRAS;
    }
}
