<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SimpleController;

class PracticeController extends Controller
{
    //
    protected $simpleController;
public function __construct(simpleController $simpleController){
    $this->simpleController=$simpleController;

}
public function practice(){
$hi=$this->simpleController->check();
return $hi;
}
}
