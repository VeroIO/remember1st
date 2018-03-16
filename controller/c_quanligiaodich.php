<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
require_once '../module/m_mm.php';
require_once '../module/m_giaodich.php';
$type     = $_POST['type'];
$username = $_POST['mm'];
if ($type == 'them') {
    /*get Hirer Info From Input*/
    $hirer_fullname = $_POST['hirer_fullname'];
    $hirer_fbid     = $_POST['hirer_fbid'];
    $hirer_fblink   = $_POST['hirer_fblink'];
    $hirer_phone    = $_POST['hirer_sdt'];
    $service        = $_POST['service'];
    $price          = $_POST['price'];
    $note           = $_POST['note'];
    /*Check Null Input*/
    if ($hirer_fullname != '' && $hirer_fbid != '' && $hirer_fblink != '' && $hirer_phone != '' && $service != '' && $price != '') {
        $mm_info = getmiddlemaninfo($username);
        /*Middle Info Value*/
        $midman_name = $mm_info->midman_name;
        $midman_fbid = $mm_info->midman_fbid;
        $midman_fb   = $mm_info->midman_fb;
        /*Handle Add Transaction*/
        $m_giaodich = new m_giaodich();
        $add        = $m_giaodich->add_giaodich($username,$midman_name, $midman_fbid, $midman_fb, $hirer_fullname, $hirer_fblink, $hirer_fbid, $hirer_phone, $service, $price, $note);
        echo "Đã Thêm Thành Công";
    } else {
        echo "Vui lòng kiểm tra xem bạn có sót gì chưa điền không hoặc liên hệ ADMIN";
    }
}
if($type=='tracuu'){
	$id=$_POST['id'];
	$m_giaodich = new m_giaodich();
	$detail=$m_giaodich->details_giaodich($id);
	echo json_encode($detail);
}
if($type=='xoagiaodich'){
	$id=$_POST['id'];
	$m_giaodich = new m_giaodich();
	$xoagiaodich=$m_giaodich->del_giaodich($id);
}
/*Get Mid man info Function*/
function getmiddlemaninfo($username)
{
    $m_mm    = new m_mm();
    $mm_info = $m_mm->user_info($username);
    return $mm_info;
}
