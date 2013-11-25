<?php
/**
 * Header of page
 * User: WINDOWS7
 * Date: 26/11/2556
 * Time: 0:03 น.
 */
?>
<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/media/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/media/css/bootstrap-theme.min.css">
    <script src="<?php echo base_url(); ?>/media/js/bootstrap.min.js"></script>
</head>
<body>
   <nav class="navbar navbar-default navbar-fixed-top" role="navigaiton">
       <li class="navbar-text"><a href="#" >Home</a></li>
       <a class="btn btn-default navbar-btn btn-danger navbar-right" href="<?php echo site_url("home/logout"); ?>">Logout</a>
       <p class="navbar-text navbar-right">ผู้ใช้งาน: <?php echo $username ?></p>
   </nav>


