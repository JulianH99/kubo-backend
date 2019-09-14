<?php

namespace App\Controllers;

use App\Models\OrderModel;

class Orders extends BaseController
{
    public function all()
    {
        $orderModel = new OrderModel();

        return json_encode($orderModel->all());
    }

    public function checkout()
    {
        try {
            $orderModel = new OrderModel();
            $data = json_decode($this->request->getBody());

            $products = $data->products;
            $price = $data->price;

            $orderId = $orderModel->insert([
                'order_date' => date('Y-m-d H:i:s'),
                'total_price' => $price
            ]);

            $orderModel->insertProds($orderId, $products);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        // return json_encode($products);
    }
}
