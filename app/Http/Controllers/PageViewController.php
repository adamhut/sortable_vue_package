<?php

namespace App\Http\Controllers;

use App\Analytics\Views;
use Illuminate\Http\Request;
use App\Analytics\Pageviews;

class PageViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(View $pageViews)
    {
        $daysBack = (int)request()->get('timeline',7);
        $domain = request()->get('domain', null);
        $customer = request()->get('customer', 7);

        //pageview repository
        //$pageViews = new Pageviews(auth()->user());

        return view('home',[
            'pageview'  => $pageViews->daysBack($daysBack,$domain,$customer),
            'domains'   => $pageViews->domains(),
            'customers' => Customers::select('id')->where('user_id',auth()->user()->id)->get(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
