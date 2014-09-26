<!DOCTYPE html>
<html lang="en" >
  <head>
    <!-- All meta descriptions -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Code geeks developed email scrubbing site">
    <meta name="author" content="Harikrushna Adiecha">

    <!-- title of site -->
    <title>
      <?php
      if(isset($title)) {
        echo $title;
      } else {
        echo "CodeGeeks - Dev";  
      }
      ?>      
    </title>

    <!-- icon of site -->
    <link rel="shortcut icon" href=<?php echo "\"".base_url("public/img/icon.png")."\""; ?>>

    <!-- javascripts for the site -->
    <script src=<?php echo "\"".base_url("public/js/jquery.min.js")."\""; ?>></script>
    <script src=<?php echo "\"".base_url("public/js/bootstrap.min.js")."\""; ?>></script>
    <script src=<?php echo "\"".base_url("public/js/common.js")."\""; ?>></script>

    <!-- style sheets for the site -->
    <link href=<?php echo "\"".base_url("public/css/bootstrap.css")."\""; ?> rel="stylesheet">
    <link href=<?php echo "\"".base_url("public/css/common.css")."\""; ?> rel="stylesheet">
    <?php foreach ($css as $css_name) { ?>
    <link href=<?php echo "\"".base_url("public/css/".$css_name.".css")."\""; ?> rel="stylesheet">
    <?php } ?>

  </head>
  <body>

    <!-- Wrap all page content here -->
    <div id="wrap">