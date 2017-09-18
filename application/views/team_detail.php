<!DOCTYPE html>
<html lang="en">

<body>

    <!-- Navigation -->
    <?php $this->load->view('header/header')?>
    <br>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <?php foreach($team as $a):?>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?=$a->judul ?>
                    <small>GSW</small>
                </h1>
                <ol class="breadcrumb">
                    <li><?=anchor('welcome/team','Team')?>
                    </li>
                    <li class="active"><?=$a->judul ?></li>
                </ol>
            </div>
        </div>
    
    <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="<?=base_url()?>/images/team/<?=$a->gambar?>" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?=$a->judul?></h3>
                
                <p><?=nl2br($a->deskripsi)?></p>
               
                <hr>

                PPG<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?=$a->ppg?>%;">
                <?=$a->ppg?>%
                </div>
                <hr>
                APG<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?=$a->apg?>%;">
                <?=$a->apg?>%
                </div>
                <hr>
                RPG<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?=$a->rpg?>%;">
                <?=$a->rpg?>%
                </div>
                <hr>
                SPG<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?=$a->spg?>%;">
                <?=$a->spg?>%
                </div>
                <hr>
                BPG<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?=$a->bpg?>%;">
                <?=$a->bpg?>%
                </div>
                <hr>
            </div>

            <?php endforeach ?>

              
            
        </div>
    

    </div>
    <?php $this->load->view('footer/footer')?>
    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
