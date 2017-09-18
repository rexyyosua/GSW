<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>CAVS-Basketball</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicosn.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->
  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
      <div class="item active" style="background-image: url(images/slider/0.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Cleveland <span>Cavaliers</span></h1>
            <p class="animated fadeInRightBig">Welcome To CAVS Basketball</p>
             <p class="animated fadeInRightBig">Click Slider to read some news</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <?php foreach ($berita as $a):?>
        <div class="item" style="background-image: url(images/slider/<?php echo $a->gambar_berita ?>)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><?php echo $a->judul_berita?></h1>
            <center><p class="animated fadeInRightBig" style="width: 350px; text-align: justify;"><?php echo substr($a->deskripsi_berita,0,100)?></p></center>
            <a data-scroll class="btn btn-start animated fadeInUpBig"<?=anchor('welcome/detail_berita/'.$a->id_berita,'Read More')?></a>
          </div>
        </div>
         <?php endforeach ?>
          
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
    </div><!--/#home-slider-->
    

    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Schedule</a></li> 
            <li class="scroll"><a href="#about-us">GS</a></li>
            <li class="scroll"><a href="#team">Team</a></li>
            <li class="scroll"><a href="#portfolio">Arena</a></li>
            <li class="scroll"><a href="#contact">Location</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>SCHEDULE</h2>
          <H4>NBA SEASON 2016-2017</H4>
        </div>
      </div>
      <?php foreach($jadwal as $a):?>
      <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
            	 <center><img class="img-responsive" src="gambar/<?php echo $a->gambar ?>" style = ' max-width:100%; max-height:100%; height:150px; width:200px' alt=""> </center>
            </div>
            <div class="entry-header text-center">
              <h3><?php echo $a->judul?></h3>
            </div>
            <div class="entry-content text-center">
              <p><?php echo nl2br($a->deskripsi)?></p>
            <hr>
            </div>
          </div>
          <?php endforeach; ?>
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="<?=base_url()?>index.php/welcome/jadwal" class="btn-loadmore"><i class="fa fa-repeat"></i> Load More</a>
        </div>                
      </div>
    </div>
  </section><!--/#blog-->


  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 align="center">About Cavs</h2>
            <p align="justify">The Cleveland Cavaliers, also known as the Cavs, are an American professional basketball team based in Cleveland, Ohio. The Cavs compete in the National Basketball Association (NBA) as a member of the league's Eastern Conference Central Division. The team began play in 1970. Since 1994, the team has played its home games at Quicken Loans Arena, which is shared with the Cleveland Gladiators of the Arena Football League and the Cleveland Monsters of the American Hockey League.
            <br>Many past and present top NBA players, including LeBron James, Mark Price, Brad Daugherty, and Zydrunas Ilgauskas, have spent most or all of their careers playing for the Cavaliers. The franchise has won five Central Division championships (1976, 2009, 2010, 2015, and 2016), three Eastern Conference championships (2007, 2015, 2016), one NBA championship (2016), and have reached the playoffs 20 times in their 46-year history. The 2016 NBA Finals victory over the Golden State Warriors marked the first time in Finals history a team had come back to win the series after trailing three games to one. The Cavaliers, however, also have a number of dubious distinctions, such as former owner Ted Stepien's tenure, which led the NBA to create a rule regulating the trading of draft picks, known as the "Stepien rule", and a 26-game losing streak in 2010–11, which, at the time, tied the record for the longest losing streak in major American professional sports.</p>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  



  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>STARTING LINEUPS</h2>
          <p>This Is The Best Players in Cleveland Cavaliers</p>
        </div>
      </div>
      <div class="team-members">
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/1.jpg" style = 'max-width:100%; max-height:100%; height:280px; width:350px' alt="">
              </div>
              <div class="member-info">
                <h3>Kyrie Irving</h3>
                <h4>Point Guard</h4>
                <p>Height : 6 ft 3 <br>Birth Day : 23 March 1992  <br>From : Melbourne, Australia</p>
              </div>
             
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/2.jpg" style = 'max-width:100%; max-height:100%; height:280px; width:350px' alt="">
              </div>
              <div class="member-info">
                <h3>LeBron James</h3>
                <h4>Small Forward</h4>
                <p>Height : 6 ft 8 <br>Birth Day : 30 Desember 1984 <br>From : Akron, Ohio, Amerika</p>
              </div>
              
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/3.jpg" style = 'max-width:100%; max-height:100%; height:280px; width:350px' alt="">
              </div>
              <div class="member-info">
                <h3>Kyle Korver</h3>
                <h4>Shooting Guard</h4>
                <p>Height :  6 ft 7 <br>Birth Day : 17 March 1981 <br>From :  Paramount, California, Amerika</p>
              </div>
              
            </div>
          </div>

          <div class="col-sm-4" style="margin-left: 200px;">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/4.jpg" style = 'max-width:100%; max-height:100%; height:280px; width:350px' alt="">
              </div>
              <div class="member-info">
                <h3>Kevin Love</h3>
                <h4>Power Forward</h4>
                <p>Height : 6 ft 10 <br>Birth Day : 7 September 1988 <br>From : Santa Monica, California, Amerika</p>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/5.jpg" style = 'max-width:100%; max-height:100%; height:280px; width:350px' alt="">
              </div>
              <div class="member-info">
                <h3>Tristan Thompson</h3>
                <h4>Center</h4>
                <p>Height : 6 ft 9 <br>Birth Day : 13 March 1991 <br>From : Toronto, Kanada</p>
              </div>
              
            </div>
          </div>
      
        </div>
      </div>            
    </div>
    
    <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="index.php/welcome/team" class="btn-loadmore"><i class="fa fa-repeat"></i> Load More</a>
        </div> 
  </section><!--/#team-->

  <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-trophy"></i>
          <h3 class="timer">0</h3>
          <p>Western</p>
          <p></p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="fa fa-trophy"></i>
          <h3 class="timer">2</h3>                    
          <p>Eastern</p>
          <p>(2007,2015,2016)</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
          <i class="fa fa-trophy"></i>
          <h3 class="timer">4</h3>                    
          <p>Division titles</p>
          <p>(1976,2009,2010,2015,2016)</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-trophy"></i>                    
          <h3>1</h3>
          <p>Championships</p>
          <p> (2016)</p>
        </div>                 
      </div>
    </div>
  </section><!--/#features-->



  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Quicken Loans Arena</h2>
          <p>commonly known as "The Q", is a multi-purpose arena in downtown Cleveland, Ohio, United States. The building is the home of the Cleveland Cavaliers of the National Basketball Association (NBA), the Cleveland Monsters of the American Hockey League, and the Cleveland Gladiators of the Arena Football League. It also serves as a secondary arena for Cleveland State Vikings men's and women's basketball.</P>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/1.jpg"  style = 'max-width:100%; max-height:100%; height:280px; width:350px' alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>The Q</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                  
                    <span class="folio-expand"><a href="images/portfolio/1.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/2.jpg" style = 'max-width:100%; max-height:100%; height:280px; width:350px' alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>The Q</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                  
                    <span class="folio-expand"><a href="images/portfolio/2.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/3.jpg" style = 'max-width:100%; max-height:100%; height:280px; width:350px' alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>The Q</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                 
                    <span class="folio-expand"><a href="images/portfolio/3.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/4.jpg" style = 'max-width:100%; max-height:100%; height:280px; width:350px' alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>The Q</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                  
                    <span class="folio-expand"><a href="images/portfolio/4.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/5.jpg" style = 'max-width:100%; max-height:100%; height:280px; width:350px' alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>The Q</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    
                    <span class="folio-expand"><a href="images/portfolio/5.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
  	          </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/6.jpg" style = 'max-width:100%; max-height:100%; height:280px; width:350px' alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>The Q</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                   
                    <span class="folio-expand"><a href="images/portfolio/6.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/7.jpg" style = 'max-width:100%; max-height:100%; height:280px; width:350px' alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>The Q</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                   
                    <span class="folio-expand"><a href="images/portfolio/7.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/8.jpg" style = 'max-width:100%; max-height:100%; height:280px; width:350px' alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>The Q</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    
                    <span class="folio-expand"><a href="images/portfolio/8.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  <section id="contact">
  <H3 class="text-center">LOCATION</H3>
  <hr>
  
    
    	
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11953.423969480515!2d-81.6882172!3d41.4965597!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53fafe5c51529920!2sQuicken+Loans+Arena!5e0!3m2!1sid!2s!4v1491270962544" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""></a>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <p>Created by : Jazzy, Rexy Yosua Siwabessy</p>
          </div>
        </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2014 Oxygen Theme.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="http://www.themeum.com/">Themeum</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
