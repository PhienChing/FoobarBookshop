<?php
$base_url = $this->config->item('base_url'); 
$assets = $this->config->item('assets');
?>

<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foobar Bookshop</title>

    <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
    <link rel="stylesheet" href="<?=$assets;?><?=$assets;?>css/normalize.css">
    <link rel="stylesheet" href="<?=$assets;?>css/foundation.css">
    <link rel="stylesheet" href="<?=$assets;?>css/topbar.css">
    <link rel="stylesheet" href="<?=$assets;?>css/font-awesome.min.css">

    <!-- If you are using the gem version, you need this only -->
    <link rel="stylesheet" href="<?=$assets;?>css/app.css">

    <script src="<?=$assets;?>js/vendor/modernizr.js"></script>

</head>
<body>