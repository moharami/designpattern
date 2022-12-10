<?php

class ProductController
{

    public function create($product_type)
    {
        $post = null; // $request->all();
        // Some post data validation logic here

        // Now we need to instantiate our product
        switch ($product_type) {
            case 'chair':
                $product = new Product_Chair($post['sku'], $post['name']);
                break;

            case 'table':
                $product = new Product_Table($post['sku'], $post['name']);
                break;

            case 'sofa':
                $product = new Product_Sofa($post['sku'], $post['name']);
                break;

            case 'bookcase':
                $product = new Product_Bookcase($post['sku'], $post['name']);
                break;
            default:
                echo 'none';
        }

        // Do something with the post data and save the product

        ...

        return $product->getType();
    }
}