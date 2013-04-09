<html>
<head>
	<script type="text/javascript" src="../controller/sha512.js"></script>
	<script type="text/javascript" src="../js/form.js"></script>
	<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.10.2.custom.js"></script>
	<link rel="stylesheet" href="../css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.10.2.custom.js">
</head>
<body>
<?php
if(isset($_GET['error'])) { 
   echo 'Error Logging In!';
}
?>
<div class="container">
<form action="../controller/process_login.php" method="get" name="login_form">
   Email: <input type="text" name="email" /><br />
   Password: <input type="password" name="password" id="password"/><br />
   <input type="button" value="Login" onclick="formhash(this.form, this.form.password);" />
</form>
</div>
	
</body>
</html>