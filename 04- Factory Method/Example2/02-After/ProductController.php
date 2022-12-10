<?php

class ProductController
{

    public function create($product_type)
    {
         $post = null; // $request->all();
        // Some post data validation logic here

        // Now we need to instantiate our product
        $product = ProductFactory::build($product_type, $post['sku'], $post['name']);


   // Do something with the post data and save the product

   ...

   return $product->getType();
 }
}