<!DOCTYPE html> 

<html lang="en"> 

<head> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

<title>Paypal </title> 

</head> 

<body> 

<?php 

//fetch products from the database 

$itemName = "Premium Script CodexWorld";
    $itemNumber = "PS123456";
    $itemPrice = 55;
    $currency = "usd";
    $orderID = "SKA92712382139"; 
    ?> 

    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"> 

       

        <input type="hidden" name="business" value="jainarchana998-facilitator@gmail.com"> 

        

        <!-- Specify a Buy Now button. --> 

        <input type="hidden" name="cmd" value="_xclick"> 

        

        <!-- Specify details about the item that buyers will purchase. --> 

        <input type="hidden" name="item_name" value="<?php echo $item_name; ?>"> 

        <input type="hidden" name="item_number" value="<?php echo $item_number; ?>"> 

        <input type="hidden" name="amount" value="<?php echo $itemPrice; ?>"> 

        <input type="hidden" name="currency_code" value="USD"> 

        

        <!-- Specify URLs --> 

        <input type='hidden' name='cancel_return' value='paypal_cancel.php'> 

<input type='hidden' name='return' value='paypal_success.php'> 

        

        <!-- Display the payment button. --> 

        <input type="image" name="submit" border="0" 

        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online"> 

        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" > 

    

    </form> 

 

</body> 

</html>