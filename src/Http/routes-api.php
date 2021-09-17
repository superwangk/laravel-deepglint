<?php

use TTLMM\Deepglint\Http\Api;
use Illuminate\Support\Facades\Route;

Route::prefix('deepglint')->group(function () {
    //查看数据
    Route::get('test-data', [Api\DeepglintController::class, 'getTestData']);
});
