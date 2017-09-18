<!DOCTYPE html>
<html lang="en">

<body>

   <?php $this->load->view('header/header')?>


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
                 <center><img class="img-responsive" src="<?=base_url()?>gambar/<?php echo $a->gambar ?>" style = 'height:150px; width:200px' alt=""> </center>
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
        </div>
        <center><?php
            echo $this->pagination->create_links();
        ?></center>
      </div>

    </div>

  </section>

   <?php $this->load->view('footer/footer')?>

</body>
</html>
