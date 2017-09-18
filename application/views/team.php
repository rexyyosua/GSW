<!DOCTYPE html>
<html lang="en">

<body>

   <?php $this->load->view('header/header')?>

    <!-- Page Content -->
    <div class="container">
    <br>
    

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Team LineUp
                    <small>Cleveland Cavaliers</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="active">Team</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->

        
        <div class="row">
            <?php foreach($team as $a):?>
            <div class="col-md-4 img-portfolio">
                <a href="<?=base_url()?>index.php/welcome/detail_team/<?=$a->id ?>">
                    <img class="img-responsive img-hover" src="<?php echo base_url() ?>images/team/<?php echo $a->gambar ?>" style = ' max-width:100%; max-height:100%; height:300px; width:700px' alt="">
                </a>
                <h3>
                    <a <?=anchor('welcome/detail_team/'.$a->id, $a->judul)?> </a>
                </h3>
                <p><?php echo substr($a->deskripsi,0,2) ?></p>
            </div>
            <?php endforeach ?>
            </div>
        

        <hr>

        <!-- Pagination -->
        <center><?php
            echo $this->pagination->create_links();
        ?></center>


        <!-- /.row -->

        <hr>

        <!-- Footer -->
        
    </div>
    <!-- /.container -->
<?php $this->load->view('footer/footer')?>
    <!-- jQuery -->


</html>
