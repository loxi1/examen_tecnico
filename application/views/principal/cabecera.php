<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="viewport" content="width=device-width">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" href="icon.svg" type="image/icon type">



  <title><?php echo $titulo_page;?></title>

  <!-- Bootstrap core CSS -->
  
  <link href="<?php echo base_url(); ?>utilitarios/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="<?php echo base_url(); ?>utilitarios/css/sweetalert/sweetalert_2.css" rel="stylesheet">
  <base href="<?php echo base_url(); ?>">

  <!-- AREA ESTILOS -->
  <?php

  if(isset($css) && is_array($css))
  {
    foreach ($css as $key => $value) 
    {
      foreach ($value as $val_e) {
        $url = base_url()."utilitarios/css/".$key."/".$val_e;
        ?>
        <link href="<?php echo $url; ?>" rel="stylesheet" type="text/css">
        <?php
      }

    }        
  }

  ?>
  <!-- -->

  <script type="text/javascript" src="<?php echo base_url(); ?>utilitarios/js/jquery.min.js"></script>

      </head>


      <body class="">