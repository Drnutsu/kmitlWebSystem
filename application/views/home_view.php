<html>
 <head>
  <title>Success Login</title>
 </head>
 <body>
    <h3>Your form was successfully submitted!</h3>
	username: <?php echo $username; ?>
    <p><a href="<?php echo site_url("home/logout"); ?>">Logout</a></p>
 </body>
</html>