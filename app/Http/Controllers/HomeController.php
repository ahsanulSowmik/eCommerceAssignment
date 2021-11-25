<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
   
    public function index()
    {

        
        // $res = ('POST','https://raw.githubusercontent.com/ProgrammingHero1/ema-john-simple-resources/master/fakeData/products.JSON');
        $res = Http::get('https://raw.githubusercontent.com/ProgrammingHero1/ema-john-simple-resources/master/fakeData/products.JSON');

        $productDetails = json_decode($res->getBody()->getContents(), true);

        // dd($productDetails);
        return view('client.homePage')->with('productDetails',$productDetails);
    }
}
