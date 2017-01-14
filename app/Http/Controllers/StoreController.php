<?php
//THIS IS HACKATHON QUALITY CODE, THIS ISNT HOW ANY SANE PERSON WOULD BUILD PRODUCT. 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Libs
use View;
use Curl;
use Illuminate\Support\Collection;

class StoreController extends Controller
{
    
    public function tempFrame(){
      return view('store.tempFrame');    
    }
    
    public function getIndex(Request $request){
      return view('store.getIndex',[
                                                                  'items'=>$this->getItems(),
                                                                  'cart'=>$request->session()->get('cart'),
                                                                  'btc_price'=>$this->grab_currency_value('USD')
                                                              ]);    
    }

       public function getItem(Request $request, $currentItemNumber){
      // $request->session()->flush();
  
        return view('store.getItem',[
                                                                  'items'=>$items,
                                                                  'currentItemNumber'=>$currentItemNumber,
                                                                  'cart'=>$request->session()->get('cart'),
                                                                  'btc_price'=>$this->grab_currency_value('USD')
                                                              ]);
    }

    public function addToCart(Request $request){
      $items = $this->getItems();      
      //Add to Session
      $current_objects = $request->session()->get('cart');
      $item = $request->input('data');  
      $cart_object = ['item'=>$items[$item['currentItemNumber']],'qty'=>$item['quanity']];
      if($current_objects == null){
          $current_objects = collect();
      }
      
      $current_objects->push([$cart_object]);            
      $request->session()->put('cart',$current_objects);      
      return back();
    }
  

    public function getThanks(Request $request){
        return view('store.getThanks',[
                                                                  'items'=>$this->getItems(),
                                                                  'cart'=>$request->session()->get('cart'),
                                                                  'btc_price'=>$this->grab_currency_value('USD')
                                                              ]);    
    }



    public static function grab_currency_value($currency = null) {
    	$response = Curl::to('https://blockchain.info/ticker')->get();
    	$response = json_decode($response, true);
    	if($currency != null && isset($response[$currency])){
      	return $response[$currency];
    	}
    	return $response;
    }

    //Total Hack, wtf, store objs as array. but 24/hrs/ :) 
    public static function getItems(){
        $items = [];
          $items[38164] = ['number'=>38164,'price'=>70.00,'img'=>'/images/photos/7.jpg'];
          $items[22782] = ['number'=>22782,'price'=>49.95,'img'=>'/images/photos/1.jpg'];
          $items[81926] = ['number'=>81926,'price'=>29.99,'img'=>'/images/photos/9.jpg'];
        return $items;
    }


}
