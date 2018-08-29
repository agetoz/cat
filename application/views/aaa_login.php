<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>___/img/logo-man.png">
<title>Dashboard - Aplikasi CAT (Computer Assisted Test) Madrasah</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>___/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>___/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>___/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url(); ?>___/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>___/js/bootstrap.min.js"></script>
</head>

<?php
$i = $this->db->query("SELECT * FROM tr_config LIMIT 1")->row();
?>
<body id="login">

	<div class="login-logo">
    <img src="<?php echo base_url(); ?>___/img/cat-madrasah.png" alt=""/>
  </div>
  <div align="center" style="color: #bb5400; font-size: 25px;"><b><?=strtoupper($i->nama_server)?></b></div>
  <div class="app-cam">
	<form action="" method="post" name="fl" id="f_login" onsubmit="return login();">
			<input type="text" id="username" name="username" autofocus value="" placeholder="Username" class="text">
		<input type="password" id="password" name="password" value="" placeholder="Password" class="text">
		<div class="login-actions"><div class="submit"><input type="submit" value="Login"></div></div>
    <div>&nbsp;</div>
    <div id="konfirmasi"></div>	
	</form>
	</div>

<div class="copy_layout login" style="text-align: center; padding-top: 10px; margin-top: 50px; margin-bottom: 20px">
  &copy; 2014 - <?php echo date('Y')?> <a href="<?php echo site_url(); ?>">Aplikasi CAT (Computer Assisted Test) Madrasah.</a> This site loaded in {elapsed_time} seconds. 
</div>

<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>
<script type="text/javascript">
	base_url = "<?php echo site_url(); ?>";
	uri_js = "<?php echo $this->config->item('uri_js'); ?>";
</script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script> 
</body>
</html>
