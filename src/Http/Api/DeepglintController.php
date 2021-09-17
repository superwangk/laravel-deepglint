<?php

namespace TTLMM\Deepglint\Http\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeepglintController extends Controller
{
    public function getTestData(Request $request){
        dd($request);
    }
}
