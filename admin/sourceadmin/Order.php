<?php
require 'class.php';
class Order extends Database {
    public function loadOrder() {
        $connect = $this->connect_database();
        $query = "SELECT * FROM orders";
        $result = mysqli_query($connect, $query);
        $row = mysqli_num_rows($result);
        $data = [];
        if ($row > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data[$row['id']]['id'] = $row['id'];
                $data[$row['id']]['date_order'] = $row['date_order'];
                $data[$row['id']]['status'] = $row['status'];
            }
        }
        return $data;
    }

    public function getDetailOrder($id) {
        $connect = $this->connect_database();
        $query = "SELECT * from orders o INNER JOIN users u ON o.id_user = u.id where o.id={$id}";
        $result = mysqli_query($connect,$query);
        $num = mysqli_num_rows($result);
        $data = [];
        if ($num > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data['total'] = $row['total'];
                $data['note'] = $row['note'];
                $data['status'] = $row['status'];
                $data['full-name'] = $row['full-name'];
                $data['address'] = $row['address'];
                $data['phone'] = $row['phone'];
                $data['date_order'] = $row['date_order'];
            }
        }

        return $data;
    }

    public function updateOrder($data) {
        $connect = $this->connect_database();
    }
}