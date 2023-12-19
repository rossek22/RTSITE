<?php
  require_once("./rcon.class.php");
  require_once("./config.php");
  $project_id = $config['anypay_project'];
  $status = 'paid';
  $secret_key = $config['anypay_secret'];
  $nick = $_REQUEST['nick'];
  $donate = $_REQUEST['donate'];
  $price = $_REQUEST['amount'];
  $arr_ip = array(
      '185.162.128.38', 
      '185.162.128.39', 
      '185.162.128.88'
  );

  $arr_sign = array(
      $_REQUEST['currency'], 
      $_REQUEST['amount'], 
      $_REQUEST['pay_id'],
      $project_id,
      $status,
      $secret_key
    
    
  );

  $sign = hash('sha256', implode(":", $arr_sign)); 

  //if(!in_array($_SERVER['REMOTE_ADDR'], $arr_ip)){
  //    die("Access denied!");
  //} 

  //if($sign != $_REQUEST['sign']){
  //    die('wrong sign!');
  //}

$mysqli->query("INSERT INTO `last_buys` (`name`, `tovarname`, `tovar`, `price`, `server`, `category`, `status`) VALUES ('{$nick}', '{$donate}', '{$donate}', '{$price}', 'main', 'main', '0')");
  die('OK');  
?>