# Spark_payment
Payment Gateway Integration <br>
The sparkpayment php file is the homepage where the user can click on Donate button <br>
this leads to two options of payment card payment or PayPal payment. <br>
The card payment is performed using Stripe Payment. <br>
This is a 3rd party intergratiion to perform sandbox testing <br>
The required files for card payment are index.php,submit.php <br>
In index file, <br>
In the JavaScript code, set your publishable API key that identifies your website to Stripe. The stripeResponseHandler() function creates a single-use token and inserts a token field in the payment form HTML. <br>

To integrate the Stripe Libraries visit https://github.com/stripe/stripe-php.git <br>

The following HTML form collects the user information (name and email) and card details (Card Number, Expiration Date, and CVC No.). For further card payment processing, the form is submitted to the PHP script (submit.php). <br>

Validate and Process Payment (submit.php) <br>
In this file, the submitted card details are validated and the charge is processed using Stripe PHP library. <br>

Get token, card details and user info from the submitted form. <br>
Include the Stripe PHP library. <br>
Set your Publishable key and Secret key which we have created in Stripe Test API Data section. <br>
Add customer to stripe using the user email and Stripe token. <br>
Specify product details and create a charge to the credit card or debit card. <br>
Retrieve the charge details that have previously been created. <br>
If the charge is successful, the order and transaction details will be inserted in the database. Otherwise, an error message will be shown.
<br> <br>
PayPal Integration <br>

paypalindex.php file is where form is created and  details are displayed <br>
Next, we’ll specify if the transaction is failed, then we’ll define the callback URL. <br>
And success url will display the details of transaction <br>

<input type='hidden' name='cancel_return' value='http://{Server name / Domain Name}/paypal_integration_php/paypal_cancel.php'> 
<br>
<input type='hidden' name='return' value='http://{server name/ Donmain Name}/paypal_integration_php/paypal_success.php'> 

