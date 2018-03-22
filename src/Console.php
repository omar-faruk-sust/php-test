<?php
namespace OmarPackage;

/**
 *
 */
class Console extends ElectronicItem implements Item
{
    //Limit 4
    const MAX_EXTRAS = 4;

    public function maxExtras()
    {
        return static::MAX_EXTRAS;
    }
}
