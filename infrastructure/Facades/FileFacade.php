<?php

/**
* Author: Spera Labs/(+94)112 144 533
* Email: hello@speralabs.com
* File Name: TemplatesFacade.php
* Copyright: Any unauthorized broadcasting, public performance, copying or re-recording will constitute an infringement of copyright.
*/

namespace infrastructure\Facades;

use Illuminate\Support\Facades\Facade;

/**
* Class TemplatesFacade
* @package domain\Facades
*/
class FileFacade extends Facade
{

    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor()
    {
        return 'infrastructure\FileService\FileService';
    }
}
