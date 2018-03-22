<?php
namespace OmarPackage;

/**
 *
 */
class Microwave extends ElectronicItem implements Item
{
    // Can not have extra
    const MAX_EXTRAS = 0;

    public function maxExtras()
    {
        return static::MAX_EXTRAS;
    }
}
