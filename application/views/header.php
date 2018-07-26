<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($page_name)) {echo $page_name .' - Sales And Inventory System';} else echo "Dashboard - POS SALES AND INVENTORY SYSTEM" ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome-4.7.0/css/font-awesome.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css')?>">
</head>
<body>

	

	

<nav class="navbar navbar-inverse">
<?php
		$cur_date = date('l, F Y');
		if ($this->session->userdata('log_in')) {
			?>
			<p class="lead" style="float: right; padding-right: 15px; margin-top: 11px;"><?php echo $cur_date ?> | <?php echo $this->session->userdata('username') ?></p>
			<?php
		}
	?>
<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
	
	<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Mogya Bi Akasa</a>
	</div>
	</div>
	</nav>
<div class="row" style="">
<div class="container-fluid main-content" >

