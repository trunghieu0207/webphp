<?php
require_once("class.php");
class Users2 extends Database
{
	function register($user,$pass,$email)
	{
		$link=$this->connect_database();
		$sql="select * from users where username='$user'";
        $result=mysqli_query($link,$sql);
		if(!$result)
		{
			$pass=md5($pass);			
			$sql2="insert into users(username,password,email) values('$user','$pass','$email')";			
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
//		        $_SESSION['']
            }
			$_SESSION['user']=$user;
			if($_SESSION['user']=='admin')
			{				
				header('location:admin.php');
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