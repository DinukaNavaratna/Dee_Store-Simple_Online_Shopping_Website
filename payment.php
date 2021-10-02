fa<?php 
    include_once 'php/sessions.php';
    if(!isset($_GET['id']) || $_GET['id'] == ""){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/payment_gateway.css">
</head>
<body>
    <div class="checkout-panel">
  <div class="panel-body">
      <br>
      <br>
      <br>
    <h2 class="title">Order ID: <?php echo $_GET['id'];?></h2>
 
    <div class="progress-bar">
      <div class="step active"></div>
      <div class="step active"></div>
      <div class="step"></div>
      <div class="step"></div>
    </div>
 
    <div class="payment-method">
      <label for="card" class="method card">
        <div class="card-logos">
          <img src="img/payment_gateway/visa_logo.png"/>
          <img src="img/payment_gateway/mastercard_logo.png"/>
        </div>
 
        <div class="radio-input">
          <input id="card" type="radio" name="payment">
          Pay with credit card
        </div>
      </label>
 
      <label for="paypal" class="method paypal">
        <img src="img/payment_gateway/paypal_logo.png"/>
        <div class="radio-input">
          <input id="paypal" type="radio" name="payment">
          Pay with PayPal
        </div>
      </label>
    </div>
 
    <div class="input-fields">
      <div class="column-1">
        <label for="cardholder">Cardholder's Name</label>
        <input type="text" id="cardholder" />
 
        <div class="small-inputs">
          <div>
            <label for="date">Valid thru</label>
            <input type="text" id="date" placeholder="MM / YY" />
          </div>
 
          <div>
            <label for="verification">CVV / CVC *</label>
            <input type="password" id="verification"/>
          </div>
        </div>
 
      </div>
      <div class="column-2">
        <label for="cardnumber">Card Number</label>
        <input type="password" id="cardnumber"/>
 
        <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
      </div>
    </div>
  </div>
 
  <div class="panel-footer">
    <button class="btn back-btn" onclick="cancel_order(<?php echo $_GET['id'];?>);">Cancel</button>
    <button class="btn next-btn" onclick="confirm_order(<?php echo $_GET['id'];?>);">Next Step</button>
  </div>
</div>
<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>