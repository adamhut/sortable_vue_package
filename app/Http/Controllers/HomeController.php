<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Analytics\Views;




class HomeController extends Controller
{
    //


    public function index(Views $pageViews)
    {
        //Filters

        $daysBack   = (int) request()->get('timeline',7);
        $domain     = request()->get('domain',null);
        $coustomer  = request()->get('customer', null);

        //Pageview "Repository"
       // $pageViews = new PageViews(auth()->user());
        
        return view('home',[
            'pageviews' => $pageViews->daysBack($daysBack,$domain,$coustomer),
            'domains'   => $pageViews->domains(),
            'customers' => Customer::select('id')->where('user_id',auth()->user()->id)->get(),
        ]);

    }
}
