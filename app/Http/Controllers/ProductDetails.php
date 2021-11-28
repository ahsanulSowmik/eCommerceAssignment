<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductDetails extends Controller
{
    
        public function index($productKey)
    {

        
        // $res = ('POST','https://raw.githubusercontent.com/ProgrammingHero1/ema-john-simple-resources/master/fakeData/products.JSON');
        $res = Http::get('https://raw.githubusercontent.com/ProgrammingHero1/ema-john-simple-resources/master/fakeData/products.JSON');

        $productDetails = json_decode($res->getBody()->getContents(), true);

        for($i = 0;$i<=count($productDetails);$i++)
        {
            if($productDetails[$i]["key"]==$productKey){
                return view('client.productDetails')->with('productDetails',$productDetails[$i]);
            }
            
        }

        
        //  dd($productDetails[0]["key"]);
        //return view('client.homePage')->with('productDetails',$productDetails);
    }
    
}
