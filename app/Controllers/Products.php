<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Products extends BaseController
{
    /**
     * returns all the products stored in database
     */
    public function all()
    {
        $productModel = new ProductModel();

        return  json_encode($productModel->findAll());
    }

    /**
     * 
     * returns a single product matching id
     * 
     * $id id of the product
     */
    public function view($id)
    {
        $productModel = new ProductModel();

        return json_encode($productModel->find($id));
    }
}
