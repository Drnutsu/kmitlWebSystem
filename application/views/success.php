<html>
 <head>
  <title>Success Login</title>
 </head>
 <body>
    <h3>Your form was successfully submitted!</h3>
	<h4>Welcome <?php echo $username; ?>!</h4>
    <p><?php echo anchor('login/homelogin', 'logout'); ?></p>
 </body>
</html>