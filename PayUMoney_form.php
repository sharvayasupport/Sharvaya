<?php include('./header.php');?>



 <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Online Payment Form</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<?php


$MERCHANT_KEY = "oZ7oo9";
$SALT = "UkojH5TS";

$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://test.payu.in";		// For Sandbox Mode
// $PAYU_BASE_URL = "https://sandboxsecure.payu.in";    // For Sandbox Mode
// $PAYU_BASE_URL = "https://secure.payu.in";    // For Live Mode

$action = '';

/*$posted = array(
  'key' =>  $MERCHANT_KEY,
  'txnid' =>  $txnid,
  'amount'  =>  10.00,
  'firstname' =>  'B N Manish',
  'email' =>  'email@example.com',
  'phone' =>  '1234567890',   //mobile no
  'productinfo' =>  'product info',
  'surl'  =>  'http://localhost/sharvaya/success.php',
  'furl'  =>  'http://localhost/sharvaya/failure.php',
  'service_provider'  =>  'payu_paisa',
); */



$posted = array(
/*  'key' =>  $MERCHANT_KEY,
  'txnid' =>  $txnid,
  'amount'  =>  10.00,
  'firstname' =>  'B N Manish',
  'email' =>  'email@example.com',
  'phone' =>  '1234567890',   //mobile no
  'productinfo' =>  'product info',
  'surl'  =>  'http://localhost/sharvaya/success.php',
  'furl'  =>  'http://localhost/sharvaya/failure.php',
  'service_provider'  =>  'payu_paisa',*/
);




if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {
    $posted[$key] = $value;
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
  <center><h2>Online Payment Form</h2></center>
    <br/>
    <?php if($formError) { ?>
	
    <center><span style="color:red">Please fill all mandatory fields.</span></center>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <center><table class="table table-borderless" style="width:50%;">
        <tr>
         <!-- <td><b>Mandatory Parameters</b></td> !-->
        </tr>
        <tr>
          <td>Amount: </td>
          <td><input name="amount"  class="form-control" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" /></td>
          <td>First Name: </td>
          <td><input name="firstname" class="form-control" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input name="email" class="form-control" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></td>
          <td>Phone: </td>
          <td><input name="phone" class="form-control" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
        </tr>
        <tr>
          <td>Product Info: </td>
          <td colspan="3"><textarea class="form-control" name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea></td>
        </tr>
        <tr>
          <td>Success URI: </td>
          <td colspan="3"><input name="surl" class="form-control" value="<?php echo (empty($posted['surl'])) ? '' : $posted['surl'] ?>" size="64" /></td>
        </tr>
        <tr>
          <td>Failure URI: </td>
          <td colspan="3"><input name="furl" class="form-control" value="<?php echo (empty($posted['furl'])) ? '' : $posted['furl'] ?>" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" class="form-control" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>

        <!-- <tr>
          <td><b>Optional Parameters</b></td>
        </tr>
        <tr>
          <td>Last Name: </td>
          <td><input name="lastname" class="form-control" id="lastname" value="<?php //echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" /></td>
          <td>Cancel URI: </td>
          <td><input name="curl" class="form-control" value="" /></td>
        </tr>
        <tr>
          <td>Address1: </td>
          <td><input name="address1" class="form-control" value="<?php //echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" /></td>
          <td>Address2: </td>
          <td><input name="address2" class="form-control" value="<?php //echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" /></td>
        </tr>
        <tr>
          <td>City: </td>
          <td><input name="city" class="form-control" value="<?php //echo (empty($posted['city'])) ? '' : $posted['city']; ?>" /></td>
          <td>State: </td>
          <td><input name="state" class="form-control" value="<?php //echo (empty($posted['state'])) ? '' : $posted['state']; ?>" /></td>
        </tr>
        <tr>
          <td>Country: </td>
          <td><input name="country" class="form-control" value="<?php //echo (empty($posted['country'])) ? '' : $posted['country']; ?>" /></td>
          <td>Zipcode: </td>
          <td><input name="zipcode" class="form-control" value="<?php //echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF1: </td>
          <td><input name="udf1" class="form-control" value="<?php //echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" /></td>
          <td>UDF2: </td>
          <td><input name="udf2" class="form-control" value="<?php //echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF3: </td>
          <td><input name="udf3" class="form-control" value="<?php //echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" /></td>
          <td>UDF4: </td>
          <td><input name="udf4" class="form-control" value="<?php //echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF5: </td>
          <td><input name="udf5" class="form-control" value="<?php //echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>" /></td>
          <td>PG: </td>
          <td><input name="pg" class="form-control" value="<?php //echo (empty($posted['pg'])) ? '' : $posted['pg']; ?>" /></td>
        </tr> !-->
        <tr>
          <?php if(!$hash) { ?>
       <td colspan="4"> <center><input type="submit" value="Submit" class="btn btn-primary rounded-pill py-3 px-5" /></center></td>
          <?php } ?>
        </tr>
          </table></center>
    </form>
  </body>
</html>

<?php include('./footer.php'); ?>