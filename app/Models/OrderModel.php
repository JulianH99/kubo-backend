<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['order_date', 'total_price'];
    protected $returnType = 'array';

    public function insertProds($orderId, $prods)
    {
        foreach ($prods as $prod) {
            $this->db->table('orders_products')->insert([
                'order_id' => $orderId,
                'product_id' => $prod->id,
                'product_number' => $prod->number
            ]);
        }
    }
}
