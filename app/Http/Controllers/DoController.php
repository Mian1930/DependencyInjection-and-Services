<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TestServices;

class DoController extends Controller
{
    //
    public function __construct(TestServices $testServices){
        $this->TestServices=$testServices;
    }
    public function book(){
       $ali= $this->TestServices->mian();
        return $ali;
    }
}
