<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
require_once '../module/m_user.php';
require_once '../module/m_category.php';
$type     = $_POST['type'];
if ($type == 'them') {
    /*get Hirer Info From Input*/
    $catename = $_POST['catename'];
    $cateid     = $_POST['cateid'];
    /*Check Null Input*/
    if ($cateid != '' && $catename !='') {
        /*Handle Add Transaction*/
        $m_category = new m_category();
        $add        = $m_category->add_category($cateid,$catename);
        echo "Đã Thêm Thành Công";
       
    } else {
        echo "Vui lòng kiểm tra xem bạn có sót gì chưa điền không hoặc liên hệ ADMIN";
    }
}
if($type=='xoacate'){
	$id=$_POST['id'];
	$m_category = new m_category();
	$delcategory=$m_category->del_category($id);
}
