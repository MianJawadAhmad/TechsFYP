<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	        crossorigin="anonymous">
	</script>

	<link rel="stylesheet" href="floating-wpp.min.css">

	<script src="floating-wpp.min.js"></script>
<title>Untitled Document</title>
</head>

<body>
<div class="floating-wpp"></div>
<script>
$(function () {

	  $('.floating-wpp').floatingWhatsApp({

	    phone: '923420939909',

	    popupMessage: 'Popup Message',

	    showPopup: true,

	    message: 'Message To Send',

	    headerTitle: 'Header Title'

	  });

	});
	</script>
</body>
</html>