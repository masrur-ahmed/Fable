<?php
namespace App\model;
class GetCon{
  public $con;
  public function __construct(){
    ob_start();
  	#session_start();

  	$timezone = date_default_timezone_set("Asia/Dhaka");

  	$this->con = mysqli_connect("127.0.0.1", "root", "", "fable");

  	if(mysqli_connect_errno()) {
  		echo "Failed to connect: " . mysqli_connect_errno();
  	}
  }
  public function cont(){
    return $this->con;
  }
  public function end(){
    ob_end_flush();  ob_get_clean();
  }
}

 ?>
