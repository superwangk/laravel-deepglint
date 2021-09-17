<?php

namespace TTLMM\Deepglint\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Admin;
use Illuminate\Routing\Controller;

class LaravelDeepglintController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Test Deepglint')
            ->description('Deepglint Description')
            ->body('Hello Youcan');
    }
}
