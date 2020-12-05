<?php
class Database2
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
   function get_product(){
        $connect= $this->connect_database();
        $query="select*from products where new=1";
        $result=mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)){
            if($row["promotion_price"]==0){
                $string= '<span>'.$row["price"].'</span>';
                $discount=0;
                
            }
            else{
                $string=  '<span>'.$row["promotion_price"].'</span>
                <span class="old">'.$row["price"].'</span>';
                $discount=(100-round(($row["promotion_price"]/$row["price"])*100));
            }
            echo '<div class="col-12 col-lg-6 col-xl-4">
            <div class="box box-default">
              <div class="fx-card-item">
                  <div class="fx-card-avatar fx-overlay-1"> <img src="../../../assets/img/product_images/'.$row["image"].'" alt="user">
                      <div class="fx-overlay scrl-up">						
                          <ul class="fx-info">
                              <li><a class="btn btn-rounded btn-outline image-popup-vertical-fit" href="../../../assets/img/product_images/'.$row["image"].'"><i class="mdi mdi-magnify"></i></a></li>
                              <li><a class="btn btn-rounded btn-outline" href="javascript:void(0);"><i class="mdi mdi-delete"></i></a></li>
                              <li><a class="btn btn-rounded btn-outline" href="javascript:void(0);"><i class="mdi mdi-settings"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="fx-card-content text-left mb-0">							
                      <div class="product-text">
                          <h2 class="pro-price text-blue">'.$string.'</h2>
                          <h4 class="box-title mb-0" >'.$row["name"].'</h4>
                          <small class="text-muted db">Lorem Ipsum Dummy Text</small>
                      </div>
                  </div>
              </div>
            </div>
            <!-- /.box -->				  
        </div>';
        }
    }
    function get_product_id($id, $page){
        $connect= $this->connect_database();
        if ($page <= 0) {
            $page = 1;
        }
        $start = ($page-1)*5;
        
        if($id==0){
            $query="select*from products limit $start, 5";
        }
        else{
            $query="select*from products where id_type=$id limit $start,5";
        }
        $result=mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)){
            if($row["promotion_price"]==0){
                $string= '<span>'.$row["price"].'</span>';
                $discount=0;
                
            }
            else{
                $string=  '<span>'.$row["promotion_price"].'</span>
                <span class="old">'.$row["price"].'</span>';
                $discount=(100-round(($row["promotion_price"]/$row["price"])*100));
            }
            echo '<div class="col-12 col-lg-6 col-xl-4">
            <div class="box box-default">
              <div class="fx-card-item">
                  <div class="fx-card-avatar fx-overlay-1"> <img src="../../../assets/img/product_images/'.$row["image"].'" alt="user" style="height: 400px;">
                      <div class="fx-overlay scrl-up">						
                          <ul class="fx-info">
                              <li><a class="btn btn-rounded btn-outline image-popup-vertical-fit" href="../../../assets/img/product_images/'.$row["image"].'"><i class="mdi mdi-magnify"></i></a></li>
                              <li><a class="btn btn-rounded btn-outline" href="ecommerce_products_edit.php?id='.$row["id"].'"><i class="mdi mdi-delete"></i></a></li>
                              <li><a class="btn btn-rounded btn-outline" href="ecommerce_products_edit.php?id='.$row["id"].'"><i class="mdi mdi-settings"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="fx-card-content text-left mb-0" style="height: 120px">							
                      <div class="product-text">
                          <h2 class="pro-price text-blue">'.$string.'</h2>
                          <h4 class="box-title mb-0">'.$row["name"].'</h4>
                          
                      </div>
                  </div>
              </div>
            </div>
            <!-- /.box -->				  
        </div>';
        }
    }
    function xuatdanhsachcategories()
	{
		$connect= $this->connect_database();
        $query="select*from categories";
        $result=mysqli_query($connect, $query);
		$i=mysqli_num_rows($result);
		if($i>0)
		{
			echo ' <select name="sp_type" class="form-control" data-placeholder="Choose a Category" tabindex="1">';
			echo ' <option value="0">Moi chon loại sản phẩm</option>';
			while($row=mysqli_fetch_array($result))
			{
				$id=$row['id'];
				$ten=$row['name'];
				echo '<option value="'.$id.'">'.$ten.'</option>';
			}
			echo '</select>';
		}
		else
		{
			echo 'dang cap nhat du lieu';
		}
    }
    
    function upimage($local,$folder,$name)
	{
		if($local!='' && $name!='')
		{
			$name=$folder."/".$name;
			if(move_uploaded_file($local,$name))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		else
		{
			return 0;
		}
	}
	function crud($sql)
	{
		$link=$this->connect_database();
        $result=mysqli_query($link, $sql);
        
		if(!$result)
		{
			echo 'Thao tác không thành công';
		}
		else
		{
			echo"<script>alert('Đã thực hiện');</script>";
		}		
	}
}
?>
