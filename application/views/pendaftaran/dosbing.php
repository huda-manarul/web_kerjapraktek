<div class="container horizontal-centered">
  <div class="col-lg-7">   
    <h3><?php echo $judul ?></h3><hr>
    <form action="/action_page.php">
      <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" class="form-control" name="nim">
      </div>
      <div class="form-group">
        <label for="jenis">Pilih Dosbing:</label>
        <select class="form-control " name="nama_dosen">
          <?php foreach($user as $u){ ?>
          <option value="<?php $u->nama_dosen?>"><?php echo $u->nama_dosen; ?></option>";
          <?php } ?>
        </select>
      </div>  
      <div class="form-group">
        <label for="nama">Nama Dosen</label>
        <input type="text" class="form-control" id="nama" disabled="true">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form> 
  </div>
</div>
