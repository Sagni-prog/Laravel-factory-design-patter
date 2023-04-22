<?php

namespace App\Factory;

use Illuminate\Support\ServiceProvider;
use App\Factory\ShopManager;
use App\Factory\ShopManagerInterface;

class ShopFactoryServiceProvider extends ServiceProvider{
   
   public function register(){
      
      $this->app->bind(ShopManagerInterface::class, ShopManager::class);
   }
}