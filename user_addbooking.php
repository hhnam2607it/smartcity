<?php
session_start();
include 'config.php';


	$data = $_SESSION['user_data'];
	$start = mysqli_real_escape_string($con, $_REQUEST['start']);
	$stop = mysqli_real_escape_string($con, $_REQUEST['stop']);

	$qr = mysqli_query($con, "INSERT into bookcar (id_user,pos_start_id,end_start_id,created_at) values ('" . $data['id'] . "',
	'" . $start . "','" . $stop . "','" . date('Y-m-d H:i:s') . "')");

	if ($qr) {
			header("Location:user_booking.php?success=Thêm thành công");
			header("Location:user_dashboard.php");
		} else {
			header("Location:user_booking.php?error=Lỗi ");
		}
?>
