<?php

namespace App\Factory;

use App\Factory\ShopFactory;

class EbayShopFactory implements ShopFactory{

    public function getProduct(): array{
      
        $product = array(
           "item_number" => "001",
           "prduct_quantity" => 4,
           "shop" => "Ebay"
        );
        
        return $product;
      
     }
}