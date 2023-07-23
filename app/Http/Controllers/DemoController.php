<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Services\DemoOne;

class DemoController extends Controller
{
    //
    public function index(DemoOne $customServiceInstance)
    {
        echo $customServiceInstance->doSomethingUseful();
    }
}
