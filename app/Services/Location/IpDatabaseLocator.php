<?php
namespace App\Services\Location;

class IpDatabaseLocator implements Locator
{


    public function fromIp($ipAddress) : Mark
    {
        $locator = new IpDatabase;
        $location = $locator->findByIpAddress($ipAddress);

        return  new Mark([
            $location['country_name'],
            $location['region_name'],
            $location['city'],
        ]);
    }

}