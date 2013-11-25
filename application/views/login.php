<script type="text/javascript">
  window.onload = function() {
    document.getElementById("error").style.display = "none";
  };
</script>
<center><div class = "well" style = "display:block;background-color:#bdc3c7;width:50%;height:50%;margin-top:5%;box-shadow: 5px 5px 5px #888888;">
  <center><h1>User Login</h1></center><br />
    
    <?php echo form_open('verifylogin'); ?>

    <h5>Username</h5>
    <input type="text" name="username" value="" size="30" />

    <h5>Password</h5>
    <input type="text" name="password" value="" size="30" />
	<div><input type="submit" value="Submit" /></div>
	<?php echo validation_errors(); ?>
	</form>
	
</div>
</center>
<?php
/*End of Login page*/