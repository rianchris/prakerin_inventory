<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" conent="">
  <title><?php echo $title ?></title>
  <!-- CSS load-->
  <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/css/metisMenu.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/css/dataTables.bootstrap.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/css/bootstrap-editable.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/css/sb-admin-2.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- icon load -->
  <link href="<?=base_url()?>assets/images/logo.png" rel="shortcut icon"  type="image/x-icon">

  <!-- JS load -->
  <link href="<?=base_url()?>assets/js/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url()?>assets/js/jquery-ui-1.11.4.custom/jquery-ui-custom-datepicker.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="overlay"></div>
  <img id="loading" width="250px" src="<?=base_url()?>assets/images/loading.gif" alt="loading">
  <!-- loading style -->

  <div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">#</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?=base_url();?>">
          <div class="inline">
            Dashboard
          </div>
        </a>
      </div>

      <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
          <a id="header-dropdown" class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i id="header-icon" class="fa fa-user fa-fw"></i> <i id="header-icon" class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#" data toggle="modal" data-target="#changePasswordModal"><i class="fa fa-refresh fa-fw"></i> Ganti Password</a></li>
            <li class="divider"></li>
            <li><a href="<?=base_url();?>authentication/logout"><i  class="fa fa-sign-out fa-fw"></i>Keluar <?=ucfirst($this->session->userdata('role'));?></a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
