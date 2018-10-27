<?php 
namespace App\Services\Location;

interface Locator
{
    public function fromIp($ipAddress) : Mark ;
}