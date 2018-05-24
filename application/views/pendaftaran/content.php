<section>
  <div class="container">
    <?php 
    foreach($user as $u){ 
      ?>
    <div class="jumbotron">
      <h3><?php echo $u->judul_berita?></h3><hr>
      <p>
       <?php echo $u->isi_berita ?>
     </p>
     <br><p>
      <a class="btn btn-lg btn-primary" href="http://www.kioscoding.com" role="button">Lihat Website &raquo;</a>
    </p>
  </div>
       <?php } ?>
</div>
</section>

