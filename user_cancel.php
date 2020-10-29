<?php
session_start();
include 'config.php';


$id = $_SESSION['user_data']['id'];

$cancel=mysqli_query($con, "update bookcar set status=2 where id='".$_SESSION['cancel_id']."'");

if ($cancel) {
    header("Location:user_booking.php?huythanhcong");

  } else {

    header("Location:user_booking.php?error=Lỗi ");
  }
?>
