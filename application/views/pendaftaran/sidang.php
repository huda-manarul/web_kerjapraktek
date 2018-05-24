<div class="container horizontal-centered">
  <div class="col-lg-7">   
    <h3><?php echo $judul ?></h3><hr>
    <form action="/action_page.php">
      <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" class="form-control" id="nim">
      </div>
      <div class="form-group">
        <label for="nama">Judul KP:</label>
        <input type="text" class="form-control" id="nama">
      </div>
      <div class="form-group">
        <label for="nama">KRS:</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile" name="myImage">
          <label class="custom-file-label" for="customFile">Pilih file Lampiran...</label>
        </div>
      </div>
      <div class="form-group">
        <label for="nama">Surat Keterangan KP:</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile" name="myImage">
          <label class="custom-file-label" for="customFile">Pilih file Lampiran...</label>
        </div>
      </div>
      <div class="form-group">
        <label for="nama">Laporan KP:</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile" name="myImage">
          <label class="custom-file-label" for="customFile">Pilih file Lampiran...</label>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form> 
  </div>
</div>