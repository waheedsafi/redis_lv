<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    //

    public function index(){

        Redis::set('user:1:first_name','waheed');
        Redis::set('user:2:first_name','naweed ');
        Redis::set('user:3:first_name','imran');

    }

}
