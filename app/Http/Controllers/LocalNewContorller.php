<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Location\IpLocationLocator;
use App\Services\Location\IpDatabaseLocator;

class LocalNewContorller extends Controller
{
    //
    public function index(Request $request, Locator $locator)
    {
        // $locator = new IpLocation;
        // $location  = $locator->locate($request->ip());

        // $mark = new Mark([
        //     $location['country_name'],
        //     $location['region_name'],
        //     $location['city'],
        // ]);

        $location = $locator->fromIp($request->ip());
        $new  = News::near($location)->take(5)->get();


    }
    public function index2(Request $request,Locator $locator)
    {

        $location = $locator->fromIp($request->ip());
        // $locator = new IpDatabase;
        // $location = $locator->findByIpAddress($request->ip());

        // $mark = new Mark([
        //     $location['country_name'],
        //     $location['region_name'],
        //     $location['city'],
        // ]);

        $new = News::near($location)->take(5)->get();


    }


}
