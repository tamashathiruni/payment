<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Payment Gateway</title>
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
  


</head>

<body>

<div class="wrapper">
  <div class="payment">
    <div class="payment-logo">
      <p><img class="logo" src="c_images/logo.png"></p>
    </div>
    
    
    <h2>Online Premium Payment
    </h2>

    <form method="post" action="">

    <div class="form">
      <div class="card space icon-relative">
        <label class="label">Policy Number:</label>
        <input name="pNo" type="text" class="input" placeholder="Policy Number" required>
    
        <img class="fas fa-user" src="https://img.icons8.com/sf-ultralight/25/000000/vehicle-security.png"/>
      </div>
      <div class="card space icon-relative">
        <label class="label">Recapcha:</label>
        
      </div>

      <button type="submit" class="btn">Show Outstanding Amount</button>

      <br><br><br>
      <div class="card space icon-relative">
        <label class="label">Outstanding Amount:</label>
        <input name="outAmt" type="text" class="input" data-mask="000 000 000 000" placeholder="Outstanding Amount" required>
        <img class="fas fa-user" src="https://img.icons8.com/plumpy/24/000000/get-cash.png"/>
        <span style="color: black" class="text-danger" >@error('outAmt'){{$message}} @enderror</span>
      </div>
      <div class="card space icon-relative">
        <label class="label">Payment Amount:</label>
        <input name="payAmt" type="text" class="input" data-mask="000 000 000 000" placeholder="Payment Amount" required>
        <img class="fas fa-user" src="https://img.icons8.com/plumpy/24/000000/get-cash.png"/>
      </div>
      <div class="card space icon-relative">
        <label class="label">Payment Mode</label>
          <input type="radio" id="male" name="gender" value="Male" required class="form-control input-sm chat-input" />
          <label for="male"> One Time</label>
          <input type="radio" id="female" name="gender" value="Female" required
            class="form-control input-sm chat-input" />
          <label for="female"> Installments</label>
      </div>
      <div class="card space icon-relative">
        <label class="label">Installment Amount:</label>
        <input type="text" name="insAmt" class="input" data-mask="000 000 000 000" placeholder="Installment Amount" required>
        <img class="fas fa-user" src="https://img.icons8.com/plumpy/24/000000/get-cash.png"/>
      </div>

      <input type="checkbox" id="agree" name="agree" required class="form-control input-sm chat-input" required />
          <label for="agree"> I have read & agreed to the <a href=""> terms & conditions </a>.</label>

      
      
      <br>
        <button  type="submit" class="btn_pay">Pay</button>
        <button type="cancel" class="btn_cancel">Cancel</button> 
        
        <div class=".visacard-logo">
        <img src="https://img.icons8.com/fluency/48/000000/visa.png"/>
        <img src="https://img.icons8.com/color/48/000000/mastercard.png"/>
        <img src="https://img.icons8.com/color/48/000000/cash-in-hand.png"/>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>
</body>

</html>

