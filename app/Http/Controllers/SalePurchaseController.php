<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalePurchaseController extends Controller
{
    public function POS(){
      return view('BackEnd.POS');
    }
}
