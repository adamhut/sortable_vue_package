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

Route::get('rebuild-pusher-checkout', function () {
    return view('design.rebuild-pusher-checkout');
});
Route::get('rebuild-youtube', function () {
    return view('design.rebuild-youtube');
});

Route::get('rebuild-twitter', function () {
    return view('design.rebuild-twitter');
});

Route::get('rebuild-netlify', function () {
    return view('design.rebuild-netlify');
});

Route::get('custom-radio-button', function () {
    return view('design.custom-radio-button');
});

Route::get('rebuild-lyften', function () {
    return view('design.rebuild-lyften');
});

Route::get('rebuild-transistor', function () {
    return view('design.rebuild-transistor');
});

Route::get('rebuild-course-landing', function () {
    return view('design.rebuild-course-landing');
});

Route::get('rebuild-meetup', function () {
    return view('design.rebuild-meetup');
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

Route::group(['prefix' => 'coders-tape'], function () {
    Route::get('auto-complete',function(){
        return view('coders-tape.auto-complete');
    });

    Route::get('pricing', function () {
        return view('coders-tape.pricing');
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

    Route::get('tooltips', function () {
        return view('laracasts.tooltips');
    });


    Route::get('render-function', function () {
        return view('laracasts.render-function');
    });

    Route::get('responsive-demo-2', function () {
        md5(vsprintf('%s.%s.%s.%s',[
            auth()->user()->id,
            $days,
            $domain,
            $customer
        ]));
        return view('laracasts.responsive-demo-part2');
    });


    Route::get('context-menu',function(){
        return view('laracasts.context-menu');
    });

    Route::get('smooth-scroll', function () {
        return view('laracasts.smooth-scroll');
    });

    Route::get('modal-no-js', function () {
        return view('laracasts.modal-no-js');
    });



    Route::get('conditional-visibility',function(){
        return view('laracasts.conditional-visibility');
    });


    Route::get('modal-no-js-to-vue', function () {
        return view( 'laracasts.modal-no-js-to-vue');
    });

    Route::get('confirmation-dialogs', function () {
        return view('laracasts.confirmation-dialogs');
    });

    Route::get('tabs', function () {
        return view('laracasts.tabs');
    });


    Route::get('inline-svg-render',function(){
        return view('laracast.inline-svg-render');
    });


});


Route::get('/vue-dropdown','VueDropdownController@index');
Route::get('/vue-serach-data', 'VueDropdownController@show');


Route::get('/workcation', function(){
    return view('workcation.index');
});

Route::get('/workcation-card', function () {
    return view('workcation.card');
});

Route::get('/workcation-splash', function () {
    return view('workcation.splash');
});

// class Anything{
//     use Macroable;

//     public function one()
//     {       
//         return 'one';
//     }
// }

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
