@include('partial.header')

<div style="background: rgb(210, 236, 54);" class="row">
    <div class="container py-5"><br><br>
      <center >
        <div class="col-md-7 align-self-center order-1 order-md-2 my-3 text-md-left text-center" style="background: rgba(253, 251, 251, 0.29); border-radius: 30px;"><br>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12" style="">
                <center><h3 class=""><b>Buat Penggalangan Dana</b></h3></center>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4 class=""><b>Upload Foto</b></h4>
              </div><br>
            </div>
            <div class="row">
              <div class="col-md-3" style=""><form action="upload.php" method="post" enctype="multipart/form-data" >
            <input type="file" name="berkas" />
            </form></div>
            </div><br>
            <div class="row">
              <div class="col-md-12">
                
               <h4 class=""><b>Detail Galang Dana</b></h4>
            
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-1"><img src="../assets/app/Vector.png" class="d-inline-block align-top" width="100%" alt=""></div>
                  <div class="col-md-11" style="">
                    <form class="">
                      <div class="form-group"> <label>Judul *</label> <input type="email" class="form-control" placeholder="Ex: 1000 Pakaian Bersih Untuk Korban Bencana"> </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"><img src="../assets/app/Vector-1.png" class="d-inline-block align-top" width="100%" alt=""></div>
              <div class="col-md-11" style="">
                <div class="form-group"> <label>Kategori*</label> </div>
                <div class="btn-group"> <a href="#" class="btn btn-outline-primary">Makanan</a> <a href="#" class="btn btn-primary">Pakaian</a> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"><img src="../assets/app/dashicons-building.png" class="d-inline-block align-top" width="100%" alt=""></div>
              <div class="col-md-11">
                <div class="form-group"> <label>Target Dana*</label> <input type="email" class="form-control" placeholder="Rp 0"> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"><img src="../assets/app/Vector-2.png" class="d-inline-block align-top" width="100%" alt=""></div>
              <div class="col-md-11">
                <div class="form-group"> <label>Batas Ketersediaan</label> <input type="date" class="form-control" placeholder="Atur Batas Waktu >"> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"><img src="../assets/app/dashicons-editor-alignleft.png" class="d-inline-block align-top" width="100%" alt=""></div>
              <div class="col-md-11">
                <div class="form-group"> <label>Deskripsi Donasi*</label> <input type="email" class="form-control" placeholder="Rp 0"> </div>
              </div>
            </div> <br>
            <a type="submit" class="btn btn-primary btn-block" style="background: rgba(28, 75, 30, 0.33);" href="/">UNGGAH GALANG DANA</a>
          </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" style=""></script>
      </center>
    </div>
  </div>
  @include('partial.footer')

  <script>
echo "<pre>";
print_r($_FILES);
echo "</pre>";
</script>