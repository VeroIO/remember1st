<meta charset="utf-8">
<?php 

require_once '../module/m_mm.php';
require_once 'c_password.php';

$username=$_POST['username'];
$password=$_POST['password'];
$password1=$_POST['password1'];
if($password==$password1){
	$result=create_password($password);
	$cryptedpassword=$result[1];
	$salt=$result[0];
	var_dump($cryptedpassword,$salt);
	$m_mm=new m_mm();
	$mm_info=$m_mm->user_info($username);
	if($mm_info){
		echo '<script>alert("Tài khoản này đã có người sử dụng bạn vui lòng chọn tài khoản khác!");</script>';
		echo '<script>window.location = "dangki.html"</script>';		
	}else{
		$add_user=$m_mm->add_user($username,$cryptedpassword,$salt);
		echo '<script>alert("Chúc mừng bạn đã đăng ký thành công!\nTài Khoản:'.$username.'\nPassword:'.$password.'");</script>';
		echo '<script>window.location = "login.html"</script>';
	}
}

 ?>