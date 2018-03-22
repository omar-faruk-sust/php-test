<?php
namespace OmarPackage;

/**
 *
 */
class Television extends ElectronicItem implements Item
{
    // No limit
    const MAX_EXTRAS = null;

    public function maxExtras()
    {
        return static::MAX_EXTRAS;
    }
}
