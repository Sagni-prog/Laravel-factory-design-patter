<?php

namespace App\Factory;

use App\Factory\ShopManagerInterface;
use App\Factory\ShopFactory;
use App\Factory\AmazonShopFactory;
use App\Factory\EbayShopFactory;

class ShopManager implements ShopManagerInterface{
   
    public function make($name): ShopFactory{
        
         switch($name){
         
            case $name === 'ebay': 
                $factory = new EbayShopFactory();
                return $factory;
                
            case $name === 'amazon':
               
               $factory = new AmazonShopFactory();
               return $factory;
               
            
            default: 
               return "no shop found";
         }
    }
}