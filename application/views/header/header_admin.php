<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>CAVS-Basketball</title>
  <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>css/animate.min.css" rel="stylesheet"> 
  <link href="<?php echo base_url()?>css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>css/lightbox.css" rel="stylesheet">
  <link href="<?php echo base_url()?>css/main.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo base_url()?>css/presets/preset1.css" rel="stylesheet">
  <link href="<?php echo base_url()?>css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo base_url()?>images/favicosn.ico">

</head>
 <!-- Navigation -->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url()?>">
            <h1><img class="img-responsive" src="<?php echo base_url()?>images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right"> 
            <li class="scroll "><?php echo anchor('admin/ab','Berita');?></li>
            <li class="scroll "><?php echo anchor('admin/jdl','Jadwal');?></li>
            <li class="scroll "><?php echo anchor('admin/ply','Team');?></li>
            
            <?php if($this->session->userdata('username')) {?>
            <li><div style="line-height:80px; color:#fff;" >Welcome <?=$this->session->userdata('username')?></div></li>
            <li><?php echo anchor('login/logout','Logout');?></li>
            <?php }else{?>
                    <li><?php echo anchor('login','Login');?></li>
              <?php } ?>

          </ul>
        </div>
      </div>
    </div>


      <script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="<?php echo base_url()?>js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>js/wow.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>js/mousescroll.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>js/smoothscroll.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>js/jquery.countTo.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>js/lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>js/main.js"></script>
</body>