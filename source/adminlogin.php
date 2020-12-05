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
                    window.location = './admin/main-horizontal-ltr/index.php';
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
		while($row=mysqli_fetch_array($result))
		{
			$id=$row['id'];
			$name=$row['name'];
			$total=$row['total'];
			$price=$row['price'];
			$img=$row['image'];
			echo '<tr>
					<td><a href="#">'.$name.'</a></td>
					<td>'.$total.'</td>
					<td>'.$price.'</td>
					<td><img src="../assets/img/product_images/'.$img.'" width="100" height="100"/></td>
					<td><a href="edit.php?id='.$id.'">Sửa</a> <a href="delete.php?id='.$id.' ">Xóa</a></td>
	  			</tr>';
			
		}
	}
}

?>