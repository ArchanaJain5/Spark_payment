<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
</head>
<body>
<style type="text/css">
	.button {
  border-top: 1px solid #96d1f8;
  background: #65a9d7;
  background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
  background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
  background: -moz-linear-gradient(top, #3e779d, #65a9d7);
  background: -ms-linear-gradient(top, #3e779d, #65a9d7);
  background: -o-linear-gradient(top, #3e779d, #65a9d7);
  padding: 5px 10px;
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  border-radius: 8px;
  -webkit-box-shadow: rgba(0, 0, 0, 1) 0 1px 0;
  -moz-box-shadow: rgba(0, 0, 0, 1) 0 1px 0;
  box-shadow: rgba(0, 0, 0, 1) 0 1px 0;
  text-shadow: rgba(0, 0, 0, .4) 0 1px 0;
  color: white;
  font-size: 23px;
  font-family: Helvetica, Arial, Sans-Serif;
  text-decoration: none;
  vertical-align: middle;
}

</style>
<button class="button" onclick="abc()"> Card Payment</button> <br><br>
<button class="button" onclick="pay()"> Paypal Payment </button>
<script type="text/javascript">
	function abc(){
			window.location.href="index.php"
		}

		function pay(){
			window.location.href="paypalindex.php"
		}
</script>
</body>
</html>