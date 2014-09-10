<?php namespace DanPhyxius\Hashids;

use Illuminate\Support\Facades\Facade;

/**
 * Facade class for Hashids
 **/
class Hashids extends Facade {

    /**
     * Get the registered component.
     *
     * @return object
     */
    protected static function getFacadeAccessor() { return 'Hashids\Hashids'; }

}
