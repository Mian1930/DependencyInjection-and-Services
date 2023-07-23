<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TestController;
use App\Services\SampleService;

class SimpleController extends Controller
{
    
    protected $testController;
    
    public function __construct(TestController $testController,sampleService $sampleService ){
    $this->testController=$testController;
    $this->sampleService=$sampleService;
    }
public function check(){
    $message=$this->testController->index();
   return $message;
}
// method 2  of deopendency injection using service
public function checked(){
$me=$this->sampleService->log();
return $me;
}
}
