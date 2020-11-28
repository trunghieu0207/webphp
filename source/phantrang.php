<?php
class Databasecon
{
    function connect_database()
    {
        $connect = mysqli_connect("localhost", "root", "", "cosmetics");
        if (!$connect) {
            die("khong ket noi duoc");
        }
        $connect->set_charset("utf8");
        return $connect;
    }

    function limit()
    {
        $connect = $this->connect_database();
        $result = mysqli_query($connect, 'select count(id) as total from products');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 10;
        // tổng số trang
        $total_page = ceil($total_records / $limit);
        if ($current_page > $total_page) {
            $current_page = $total_page;
        } else if ($current_page < 1) {
            $current_page = 1;
        }
        $start = ($current_page - 1) * $limit;
        $result = mysqli_query($connect, "SELECT * FROM products LIMIT $start, $limit");
        $row = mysqli_fetch_assoc($result);
        if ($current_page > 1 && $total_page > 1) {
            echo '<li><a class="prev" href="shop.php?page=' . ($current_page - 1) . '><i class="fa fa-angle-double-left"></i></a></li>';
        }
        for ($i = 1; $i <= $total_page; $i++) {
            if ($i == $current_page) {
                echo '<li><a class="active" href="#">' . $i .'</a></li>';
            } else {
                echo '<li><a href="shop.php?page=' .$i.'">' . $i . '</a></li>';
            }
        }
        if ($current_page < $total_page && $total_page > 1) {
            echo '<a class="next" href="shop.php?page=' . ($current_page + 1) . '"><i class="fa fa-angle-double-right"></i><a/> | ';
        }
        echo '</div>';
    }

    public function getTotalProduct($id) {
        $connect = $this->connect_database();
        if($id > 0) {
            $query = "SELECT * FROM products where id_type = $id";
        } else {
            $query = "SELECT * FROM products";
        }
        
        $result = mysqli_query($connect, $query);

        return mysqli_num_rows($result);
    }
}

?>

