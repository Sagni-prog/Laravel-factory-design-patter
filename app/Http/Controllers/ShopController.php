<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factory\ShopManagerInterface;

class ShopController extends Controller
{
    private $shopFactory;
    
    public function __construct(ShopManagerInterface $shopFactory){
       
       $this->shopFactory = $shopFactory;
    }
    
    public function amanzonShop(){
       
       $factory =  $this->shopFactory->make('amazon');
       $product = $factory->getProduct();
       
       return $product; 
    }
    
    public function ebayShop(){
       
       $factory =  $this->shopFactory->make('ebay');
       $product = $factory->getProduct();
       
       return $product; 
    }
}
