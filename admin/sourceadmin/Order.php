<?php
require 'class.php';
class Order extends Database {

    /**
     * @return array
     */
    public function loadOrder(): array {
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

    /**
     * @param string $id
     * @return array
     */
    public function getDetailOrder(string $id): array {
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

    /**
     * @param array $data
     * @param string $id
     * @return bool
     */
    public function updateOrder(array $data, string $id): bool {
        $connect = $this->connect_database();
        $note = $data['note'];
        $status = $data['status'];
        $address = $data['address'];
        $phone = $data['phone'];
        $query = "UPDATE orders SET note='${note}', status='${status}', address='${address}', phone='${phone}' WHERE id = ${id};";
        if (mysqli_query($connect, $query)) {
            return 1;
        }

        return 0;
    }
}