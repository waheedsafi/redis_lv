<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedisController;

use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    // return view('welcome');

    Redis::set('key', 'value');

});

Route::get('/redis-test', function () {
    $redis = Illuminate\Support\Facades\Redis::connection();
    
    return $redis->get("mobile");
});




Route::get('/redis',[RedisController::class, 'index']);
