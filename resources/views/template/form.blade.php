@include('partial.header')
<div style="background: rgb(210, 236, 54);" class="row">
    <div class="container py-5"><br><br>
      <center >
        <div class="col-md-7 align-self-center order-1 order-md-2 my-3 text-md-left text-center" style="background: rgba(253, 251, 251, 0.29); border-radius: 30px;">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12" style="">
                <h3 class=""><b>Buat Penggalan Dana</b></h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4 class=""><b>Upload Foto</b></h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3" style=""><form action="upload.php" method="post" enctype="multipart/form-data" >
            <input type="file" name="berkas" />
            </form></div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4 class=""><b>Detail Galang Dana</b></h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-1"><img class="img-fluid d-block my-3 mx-auto animate-in-left" src="../assets/app/uil-image-plus.png" width="100"></div>
                  <div class="col-md-8" style="">
                    <form class="">
                      <div class="form-group"> <label>Judul *</label> <input type="email" class="form-control" placeholder="Enter email"> </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"><img class="img-fluid d-block my-3 mx-auto animate-in-left" src="../assets/app/uil-image-plus.png" width="100"></div>
              <div class="col-md-8">
                <div class="form-group"> <label>Judul *</label> <input type="email" class="form-control" placeholder="Enter email"> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"><img class="img-fluid d-block my-3 mx-auto animate-in-left" src="../assets/app/uil-image-plus.png" width="100"></div>
              <div class="col-md-8">
                <div class="form-group"> <label>Judul *</label> <input type="email" class="form-control" placeholder="Enter email"> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"><img class="img-fluid d-block my-3 mx-auto animate-in-left" src="../assets/app/uil-image-plus.png" width="100"></div>
              <div class="col-md-8">
                <div class="form-group"> <label>Judul *</label> <input type="email" class="form-control" placeholder="Enter email"> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"><img class="img-fluid d-block my-3 mx-auto animate-in-left" src="../assets/app/uil-image-plus.png" width="100"></div>
              <div class="col-md-8">
                <div class="form-group"> <label>Judul *</label> <input type="email" class="form-control" placeholder="Enter email"> </div>
              </div>
            </div>
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