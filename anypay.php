<?php
require_once("./config.php");
  $project_id = $config['anypay_project'];
  $pay_id = time();
  $amount = $_POST['price'];
  $currency = 'RUB';
  $desc = 'Оплата товара на сервере WELFSINE';
  $success_url = '';
  $fail_url = '';
  $secret_key = $config['anypay_secret'];
  $donate = $_REQUEST['donate'];

  $arr_sign = array( 
      $project_id, 
      $pay_id,
      $amount, 
      $currency,
      $desc, 
      $success_url, 
      $fail_url, 
      $secret_key,
  );

  $sign = hash('sha256', implode(':', $arr_sign)); 
?>

<form action='https://anypay.io/merchant' name='payform' accept-charset='utf-8' method='post'>
<input type='hidden' name='merchant_id' value='<?php echo $project_id; ?>'>
<input type='hidden' name='amount' value='<?php echo $amount; ?>'>
<input type='hidden' name='currency' value='<?php echo $currency; ?>'>
<input type='hidden' name='pay_id' value='<?php echo $pay_id; ?>'>
<input type='hidden' name='desc' value='<?php echo $desc; ?>'>
<input type='hidden' name='email' value='example@mail.com'>
<input type='hidden' name='sign' value='<?php echo $sign; ?>'>
<input type='hidden' name='donate' value='<?php echo $_REQUEST['donate']; ?>'>
</form>
  
<script type="text/javascript">
document.forms["payform"].submit();
</script>