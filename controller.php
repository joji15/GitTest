<?php
if(isset($_GET['action'])){
  switch($_GET['action']){
    case 'adminlogin': admin_login(); break;
    case 'adminlogout': admin_logout(); break;
    default:
    include "view/loginpage.php";
  }
}
else{
  include "view/loginpage.php";
}

function admin_login(){
  if($_POST['username'] == "admin" && $_POST['password'] == "password"){
    include "view/admindash.php";
  }
  else {

  }
}

function admin_logout(){
  include "view/loginpage.php";
}
?>
