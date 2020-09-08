

    <!-- label -->
    <div class="container populer">
      <div class="row-lg-12">
        <small id="emailHelp" class="form-text text-muted"><span class="musim">Summer <span class="tahun">2020</span></span></small>
      </div>
    </div>
    <!-- label -->

    <!-- GALERI -->
    <div class="container galeri post mt-3">
      <div class="row">
        <div class="col">
          <ul>

            <?php foreach ($popular as $p) { ?>

            <a href="">
            <li class="vid">
              <img src="asset/img/<?php echo $p->img?>" alt="">
              <div class="judul">
                <p><?php echo $p->judul?></p>
              </div>
            </li>
            </a>
            
            <?php } ?>

          </ul>
        </div>
      </div>
    </div>
    <!-- AKHIR GALERI -->

    <!-- label -->
    <div class="container populer mb-1">
      <div class="row-lg-12">
        <small id="emailHelp" class="form-text text-muted">Postingan Terbaru!</small>
      </div>
    </div>
    <!-- label -->

    <!-- new post update -->
    <div class="container post mt-3">
      <div class="row">
        <div class="col">
          <ul>

            <?php foreach ($post as $po) { ?>
            <a href="<?php echo $po->link?>">
            <li class="vid">
              <img src="asset/img/<?php echo $po->img?>" alt="">
              <div class="judul">
                <p><?php echo $po->judul?></p>
                <p>Episode <?php echo $po->eps?></p>
                
              </div>
            </li>
            </a>
            <?php } ?>

          </ul>
        </div>
      </div>
    </div>
    <!-- akhir new post update -->

    