Kindly take a look on login.php
The path to stylesheets and script has to be echoed as in login.php

which is 
<!--
 <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

 <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
-->
