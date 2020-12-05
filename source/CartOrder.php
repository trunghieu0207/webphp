<?php
require 'class.php';
class CartOrder extends Database {
    /**
     * @param array $products
     * @param array $informationOrders
     * @return bool
     */
    public function orderProduct(array $products, array $informationOrders): bool {
        $idOrder = $this->insertOrder($informationOrders);
        if (!$idOrder) {
            return false;
        }
        if (!$this->insertOrderDetail($products, $idOrder)) {
            return false;
        }
        unset($_SESSION['cart']);

        return true;
    }

    /**
     * @param array $informationOrders
     * @return int | boolean
     */
    private function insertOrder(array $informationOrders): int {
        $connect = $this->connect_database();
        $dateOrder = date("Y-m-d");
        $query = "INSERT INTO orders (date_order, total, note, status, id_user)
                    VALUES ('{$dateOrder}','{$informationOrders['total']}', '{$informationOrders['note']}', 'inprocess', '1');";
        if (mysqli_query($connect, $query)) {
            return mysqli_insert_id($connect);
        }

        return false;
    }

    /**
     * @param array $products
     * @param int $idOrder
     * @return bool
     */
    private function insertOrderDetail(array $products, int $idOrder): bool {
        $connect = $this->connect_database();
        $query = "INSERT INTO `orders-detail` (id_order, id_product, amount, price) VALUES ";
        $stringValue = '';

        foreach ($products as $id => $product) {
            $totalOfEachProduct = $product['gia'] * $product['qty'];
            $stringValue .= "('{$idOrder}', '{$id}', '{$product['qty']}', '{$totalOfEachProduct}'),";
        }

        $lengthStringValue = strlen($stringValue);
        $stringValue = substr($stringValue, 0, $lengthStringValue -1);
        $query .= $stringValue;

        if (mysqli_query($connect, $query)) {
            return true;
        }

        return false;
    }

}