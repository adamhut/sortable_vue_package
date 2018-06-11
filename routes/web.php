<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Traits\Macroable;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('date-picker-pikaday',function(){
    return view('pikaday');
});


Route::get('/sortable', function () {
    return view('sortable');
});

Route::get('/sortable-without', function () {
    return view('withoutVue');
});

Route::get('/flickity-without', function () {
    return view('withoutVueFlickity');
});

Route::get('/flickity-with', function () {
    return view('withVueFlickity');
});


Route::get('/modal',function(){
    return view('modal.index');
});


Route::get('testmonials', function () {
    return view('testmonials');
});

	
Route::get('css-for-backend-01', function () {
    return view('design.01');
});


Route::get('css-for-backend-02-card' ,function(){
    return view('design.card');
});

Route::get('css-for-backend-02-card-plain-tailwinds', function () {
    return view('design.card-plain-tailwinds');
});

Route::get('rebuild-resolute', function () {
    return view('design.rebuild-resolute');
});

Route::group(['prefix' => 'advanced-vue'], function () {

    Route::get('controlled-component', function () {
        return view('advanced-vue.controlled-component');
    });

    Route::get('wrapping-pikaday', function () {
        return view('advanced-vue.wrapping-pikaday');
    });

    Route::get('encapsulating-external-behavior',function(){
        return view('advanced-vue.encapsulating-external-behavior');
    });
    Route::get('encapsulating-external-behavior-backgroud-scroll', function () {
        return view('advanced-vue.encapsulating-external-behavior-background-scroll');
    });

    Route::get('encapsulating-external-behavior-portal', function () {
        return view('advanced-vue.encapsulating-external-behavior-portal');
    });

    Route::get('inject-content-using-slot', function () {
        return view('advanced-vue.inject-content-using-slot');
    });

    Route::get('extending-components-using-composition', function () {
        return view('advanced-vue.extending-components-using-composition');
    });

    Route::get('passing-data-up-using-scoped-slot', function () {
        return view('advanced-vue.passing-data-up-using-scoped-slot');
    });

    Route::get('render-function-101', function () {
        return view('advanced-vue.render-function-101');
    });

    Route::get('render-function-and-components', function () {
        return view('advanced-vue.render-function-and-components');
    });

    Route::get('encapsulating-external-behavior-portal-loading-content', function () {
        return view('advanced-vue.encapsulating-external-behavior-portal-loading-content');
    });


    Route::get('render-function-and-children', function () {
        return view('advanced-vue.render-function-and-children');
    });

    Route::get('render-function-and-slot', function () {
        return view('advanced-vue.render-function-and-slot');
    });

    Route::get('data-provider-components', function () {
        return view('advanced-vue.data-provider-components');
    });
    Route::get('getting-started-with-renderless-ui-components', function () {
        return view('advanced-vue.getting-started-with-renderless-ui-components');
    });
    
    Route::get('implementing-alternate-layouts-with-renderless-components', function () {
        return view('advanced-vue.implementing-alternate-layouts-with-renderless-components');
    });

    Route::get('wrapping-renderless-components', function () {
        return view('advanced-vue.wrapping-renderless-components');
    });
    Route::get('element-queries-as-adata-provider-component', function () {
        return view('advanced-vue.element-queries-as-adata-provider-component');
    });

    Route::get('building-compound-components-with-provide-inject',function(){
        return view('advanced-vue.building-compound-components-with-provide-inject');
    });
    
    Route::get('building-a-compound-sortable-list-component', function () {
        return view('advanced-vue.building-a-compound-sortable-list-component');
    });

    Route::get('building-a-search-select',function(){
        return view('advanced-vue.building-a-search-select');
    });
});




Route::group(['prefix' => 'laracasts'], function () {
    Route::get('create-marco',function(){
        collect(['first','second','Three'])->firstNth(2);

        //a macro created in AppServiceProvider
        File::make(__DIR__.'/new.php');
    });


    Route::get('contact-support-modal', function () {
        return view('laracasts.contact-support-modal');
    });

    Route::get('faq', function () {
        return view('laracasts.faq');
    });

    Route::get('price-selection', function () {
        return view('laracasts.price-selection');
    });

    Route::get('fix-on-top', function () {
        return view('laracasts.fix-on-top');
    });

    Route::get('call-to-action-banner', function () {
        return view('laracasts.call-to-action-banner');
    });

    Route::get('responsive-demo', function () {
        return view('laracasts.responsive-demo');
    });
});

class Anything{
    use Macroable;

    public function one()
    {       
        return 'one';
    }
}
