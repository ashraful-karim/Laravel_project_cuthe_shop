<!DOCTYPE html>
<html xmlns= "http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="iso-8859-1">
	<title>Website Payment Standard</title>

	<script type="text/javascript" language="javascript">
		function paypal_submit(){
			//var actionName = "https://www.paypal.com/cgi-bin/webscr";
			var actionName = "https://www.sandbox.paypal.com/cgi-bin/webscr";
			document.forms.frmOrderAutoSubmit.action = actionName;
			document.forms.frmOrderAutoSubmit.submit();
		}
	</script>
</head>
<body onload="paypal_submit()">

<form style="padding: 0;margin: 0" name="frmOrderAutoSubmit" method="post">
	 
	 <input type="hidden" name="upload" value="1">
	 <input type="hidden" name="cmd" value="_xclick">
	 <input type="hidden" name="business" value="topu1826@gmail.com">


	 <input type="hidden" name="quantity" value="2">
	 <input type="hidden" name="item_name" value="laptop">
	 <input type="hidden" name="amount" value="1000">

	 <input type="hidden" name="rm" value="2">
	 <input type="hidden" name="address_override" value="0">
	 <input type="hidden" name="first_name" value="<?php//=customer_info->shipping_id ?>">
	 <input type="hidden" name="last_name" value="">

	 <input type="hidden" name="address1" value="">
	 <input type="hidden" name="address2" value="">
	 <input type="hidden" name="city" value="">
	 <input type="hidden" name="state" value="">
	 <input type="hidden" name="zip" value="">
</form>

</body>
</html>