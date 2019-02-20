<!DOCTYPE html>
<html lang="<?php echo WEBSITE_LANGUAGE; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php echo WEBSITE_DESCRIPTION; ?>">
  <meta name="keywords" content="<?php echo WEBSITE_KEYWORDS; ?>">
  <meta name="author" content="<?php echo WEBSITE_AUTHOR; ?>">
  <meta property="og:title" content="<?php echo WEBSITE_FACEBOOK_NAME; ?>"/>
  <meta property="og:image" content="<?php echo base_url("assets/images/logo.png") ; ?>"/>
  <meta property="og:site_name" content="<?php echo WEBSITE_FACEBOOK_URL; ?>"/>
  <meta property="og:description" content="<?php echo WEBSITE_FACEBOOK_DESCRIPTION; ?>"/>
  <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico');?>">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url("assets/css/frontend.css"); ?>">

  <title>EasyFiles - achats fichiers clients</title>
</head>
<body>

<!-- header -->
<header>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top nav-menu navbar-dark bg-dark">
    <a href="<?php echo base_url('Home');?>" class="navbar-brand text-white d-block mx-auto bottom-border text-center"><img class="logo" src="<?php echo base_url('assets/images/logo.png');?>" alt="logo" ><span class="text-light">EASY</span><span class="orange mr-3">Files</span></a>
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <span class="lead text-info"> Achat de Fichiers de Prospection Qualifiés en ligne</span>
      <div class="collapse navbar-collapse justify-content-end text-uppercase font-weight-bold" id="myNavbar">
        <ul class="navbar-nav">
     
          <li class="nav-item">
            <a href="<?php echo base_url('Client_Login/login');?>" class="nav-link m-2 menu-item"><i class="fas fa-lock text-danger mr-2"></i>Connexion</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('home');?>" class="nav-link m-2 menu-item"><i class="fas fa-user text-danger mr-2"></i>Inscription</a>
          </li>
          <li class="nav-item">
          <a href="<?php echo base_url('Admin_Login');?>" class="nav-link m-2 menu-item text-muted"><i class="fas fa-cog  mr-2 text-muted"></i>admin</a>
          </li>
       
        </ul>
      </div>
    </nav>
    <!-- end of navbar -->
