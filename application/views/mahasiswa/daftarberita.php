<section>
  <div class="container">
    <div class="jumbotron">
      <?php 
      foreach($user as $u){ 
        ?>
        <h3><?php echo $u->judul_berita?></h3><hr>
        <p>
         <?php echo $u->isi_berita ?>
       </p>
       <br><p>
       </p>
       <?php } ?>
     </div>
   </div>
 </section>