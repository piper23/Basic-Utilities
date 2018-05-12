<?php

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>submit OTP</title>
</head>
<body>
<div>
<form action="../controllers/getOTP.php" method="post">
		<input type="text" name="email">
	<input type="password" name="password">
	<button type="submit">Get OTP</button>
</form>
</div>
</body>
</html>