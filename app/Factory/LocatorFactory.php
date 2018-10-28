<?php 
namespace App\Factory;

use App\Services\Location\IpDatabaseLocator;
use App\Services\Location\IpLocationLocator;

class LocatorFactory{
    public function make($source) : Locator
    {
        switch ($source) {
            case 'api':
                return new IpLocationLocator;
                    # code...
                break;
            case 'database':

                return new IpDatabaseLocator;
                break;

            default:
                    # code...
                throw new \RuntimeException("Unknown IP Locator Service");
                break;
        }
        
    }
}