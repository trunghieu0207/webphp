<?php
require_once("class.php");
class Users2 extends Database
{
	function register($user,$pass,$email, $fullname)
	{
		$link=$this->connect_database();
		$sql="select * from users where username='$user'";
        $result=mysqli_query($link,$sql);
        $numberUser = mysqli_num_rows($result);
		if($numberUser == 0)
		{
			$pass=md5($pass);			
			$sql2="insert into users(username,password,email, permission, `full-name`) values('$user','$pass','$email', 'customer', '$fullname')";
			if(mysqli_query($link,$sql2))
			{
				echo"<script>alert('User created');</script>";
			}
			else
			{
				echo"<script>alert('Register failed');</script>";
			}
		}
		else
		{
			echo"<script>alert('Username already exists');</script>";
		}
	}
	function login($user,$pass)
	{
		$link=$this->connect_database();
		$pass=md5($pass);
		$sql="select * from users where username='$user' and password='$pass'";
        $result=mysqli_query($link,$sql);
        $numberUser = mysqli_num_rows($result);
		if($numberUser === 1)
		{
		    while ($row = mysqli_fetch_array($result)) {
		        $_SESSION['id'] = $row['id'];
		        $_SESSION['username'] = $row['username'];
		        $_SESSION['password'] = $row['password'];
		        $_SESSION['permission'] = $row['permission'];
            }
			if($row['permission'] === 'admin')
			{				
				header('location:../../index.php');
			}
			else
			{
				header("location:index.php");
			}			
		}
		else
		{
			echo "<script>alert('Login Failed');</script>";
		}
	}
	
}
?>