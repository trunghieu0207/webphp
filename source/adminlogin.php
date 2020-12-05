<?php
session_start();
require_once("class.php");
class User extends Database{
    function login($username, $password){
        $connect = $this->connect_database();
        $password=md5($password);
        $query="Select username, password, permission, `full-name` from users where username='$username' and password='$password'";
        $result= mysqli_query($connect, $query);
        $i=mysqli_num_rows($result);
        if($i==1){
            while($row=mysqli_fetch_array($result)){
            $_SESSION["username"]=$row["username"];
            $_SESSION["fullname"]=$row["full-name"];
            $_SESSION["password"]=$row["password"];
            $_SESSION['permission'] = $row['permission'];
                echo "<script>
                    window.location = './admin/main/index.php';
                </script>";
            }
        }
        else{
            echo 'username or password is wrong!';
        }
    }
    function confirm($username, $password, $permisison){
        if ($permisison != 'admin') {
            echo "<script>
                    window.location = '../../index.php';
                </script>";
        }
        $connect = $this->connect_database();
        $query="Select username, password from users where username='$username' and password='$password'";
        $result= mysqli_query($connect, $query);
        if(!$result){
            echo "<script>
                    window.location = '../../login-register.php';
                </script>";
        }
    }
    function adminsearch($sname)
	{
		$_SESSION['searchname']=$sname;		
		$link=$this->connect_database();
		$sql="select*from products where name like '%$sname%'";
		$result=mysqli_query($link, $sql);
		if(!$result)
		{
            echo '<table border="1" align="center">
            <tr><td colspan="4">Không có sản phẩm</td></tr>
            </table>';
		}	
		else
		{
            echo '<table border="1" align="center">
                    <tr>
                    <td>STT</td>
					<td>Tên</td>
					<td>Số lượng</td>
					<td>Giá</td>
					<td>Giảm Giá</td>
					<td>Hình</td>
				  </tr>';
		}
		while($row=mysqli_fetch_array($result))
		{
			$id=$row['id'];
			$name=$row['name'];
			$total=$row['total'];
			$price=$row['price'];
			$proprice=$row['promotion_price'];
			$img=$row['image'];
            echo '<tr>
                    <td>'.$id.'</td>
					<td>'.$name.'</td>
					<td>'.$total.'</td>
					<td>'.$price.'</td>
					<td>'.$proprice.'</td>
					<td><img src="../../assets/img/product_images/'.$img.'" width="100" height="100"/></td>
					<td><a href="./pages/ecommerce_products_edit.php?id='.$id.'" class="edit" data-toggle="modal">
							Edit <i class="mdi mdi-settings"></i> </i>
						</a>
						<a href="./pages/ecommerce_products_edit.php?id='.$id.'" class="delete" data-id="'.$id.'" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 >Delete <i class="mdi mdi-delete"></i> </i></a>
                    </td>
					</td>					
                  </tr>
                  ';
                			
        }
        echo '<table/>';
	}
	function laycot($sql)
	{
		$link=$this->connect_database();
		$result=mysqli_query($link, $sql);
		$i=mysqli_num_rows($result);
		$giatri='';
		if($i>0)
		{
			while($row=mysqli_fetch_array($result))
			{
				$id=$row[0];
				$giatri=$id;
				
			}
			return $giatri;
		}
		else
		{
			return $giatri;
		}
	}

	
}
?>