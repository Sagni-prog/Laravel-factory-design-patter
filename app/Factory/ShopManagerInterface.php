<?php 

namespace App\Factory;

use App\Factory\ShopFactory;

Interface ShopManagerInterface{
   
    public function make($name): ShopFactory;
}