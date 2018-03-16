<meta charset="utf-8">
<?php 

require_once '../module/m_user.php';
require_once 'c_password.php';

$username=$_POST['username'];
$password=$_POST['password'];
$password1=$_POST['password1'];
if($password==$password1){
	$result=create_password($password);
	$cryptedpassword=$result[1];
	$salt=$result[0];
	var_dump($cryptedpassword,$salt);
	$m_user=new m_user();
	$user_info=$m_user->user_info($username);
	if($mm_info){
		echo '<script>alert("Tài khoản này đã có người sử dụng bạn vui lòng chọn tài khoản khác!");</script>';
		echo '<script>window.location = "dangki.html"</script>';		
	}else{
		$add_user=$m_user->add_user($username,$cryptedpassword,$salt);
		var_dump($add_user);
		echo '<script>alert("Chúc mừng bạn đã đăng ký thành công!\nTài Khoản:'.$username.'\nPassword:'.$password.'");</script>';
		echo '<script>window.location = "dangnhap.html"</script>';
	}
}

 ?>