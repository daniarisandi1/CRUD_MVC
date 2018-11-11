<!DOCTYPE html>
<html lang="en">
<head>
  <title>KARYADUARETINA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/w3.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font.css');?>">
</head>
<body class="w3-white">
<header class="w3-container w3-card w3-top w3-white w3-xlarge w3-padding">
  <h1 class="col-sm-11 w3-center w3-tangerine" style="position: absolute;left: 0;top: 17%;width: 98%;text-align: center;">KARYADUARETINA</h1>
  <a href="javascript:void(0)" class="col-sm-1 w3-button w3-right w3-white w3-left w3-md" onclick="w3_open()">☰</a>
</header>
<div class="w3-container">
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-black w3-animate-right w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;right:0;" id="mySidebar">
  <a href="javascript:void()" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-32">CLOSE</a> 
  <a href="<?php echo base_url('index/about');?>" class="w3-bar-item w3-button w3-center w3-padding-16">ABOUT US</a>
  <a href="<?php echo base_url('index/contact');?>" class="w3-bar-item w3-button w3-center w3-padding-16">CONTACT US</a>
  <a class="w3-bar-item w3-button w3-center w3-padding-16" onclick="myAccordion('demo')" href="javascript:void(0)">GALLERY <i class="fa fa-caret-down"></i></a>
    <div id="demo" class="w3-hide">
    <?php 
    $images = $this->db->query("SELECT * FROM category");
    foreach($images->result() as $view):?>
      <a class="w3-bar-item w3-button w3-medium" href="<?php echo base_url('index/category/'.$view->name) ?>"><?=$view->name?></a>
    <?php endforeach;?>
    </div>
</nav>
</div>
<br><br>