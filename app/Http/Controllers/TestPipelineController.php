<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RemoveWords;
use Illuminate\Pipeline\Pipeline;
use App\Services\UpperFirstCharacter;

class TestPipelineController extends Controller
{
    public function index()
    {
        request()->get('content');

        $result = app(Pipeline::class)
            ->send(request()->get('content'))
            ->through([
                RemoveWords::class,
                UpperFirstCharacter::class,
            ])->then(function($content){
                return $content;
            });

        return $result;
    }
}
