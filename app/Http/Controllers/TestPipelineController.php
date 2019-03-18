<?php

namespace App\Http\Controllers;

use App\User;
use App\Filters\NameFilter;
use Illuminate\Http\Request;
use App\Services\RemoveWords;
use Illuminate\Pipeline\Pipeline;
use App\Services\UpperFirstCharacter;

class TestPipelineController extends Controller
{
    public function index()
    {
        $request = request();

        $result = with(User::query(),function($builder) use($request){
             return app(Pipeline::class)
                ->send([$request,$builder])
                ->through([
                    NameFilter::class,
                    DomainFilter::class,
                ])
                ->then(function($request) {
                    [$request,$builder] = $request;
                    return $builder->paginate();
                });
        });

        // $result = app(Pipeline::class)
        //     ->send(request()->get('content'))
        //     ->through([
        //         RemoveWords::class,
        //         UpperFirstCharacter::class,
        //     ])->then(function($content){
        //         return $content;
        //     });

        return $result;
    }
}
