@include('partial.header')
<div style="background: rgb(210, 236, 54);" class="row">
    <div class="container py-5"><br><br>
      <center>
        <div class="col-md-7 align-self-center order-1 order-md-2 my-3 text-md-left text-center" style="background: rgba(253, 251, 251, 0.29); border-radius: 30px;"><br>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12" style="">
                <center>
                  <h3 class=""><b>Buat Donasi</b></h3>
                </center>
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
            </form> </div>
            </div> <br>
            <div class="row">
              <div class="col-md-12">
                <h4 class=""><b>Detail Donasi</b></h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-1"><img class="img-fluid d-block my-3 mx-auto animate-in-left"  src="../assets/app/Vector.png" width="100"></div>
                  <div class="col-md-11" style="">
                    <form class="">
                      <div class="form-group"> <label>Judul*</label> <input id="judul" type="email" class="form-control" placeholder="Ex: Ayam Goreng Madu Tidak Terjual"> </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"><img class="img-fluid d-block my-3 mx-auto animate-in-left"  src="../assets/app/Vector-1.png" width="100"></div>
              <div class="col-md-11" style="">
                <div class="form-group"> <label>Kategori*</label> </div>
                <div class="btn-group"> <a href="#" class="btn btn-outline-primary">Makanan</a> <a href="#" class="btn btn-primary">Pakaian</a> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"><img class="img-fluid d-block my-3 mx-auto animate-in-left"  src="../assets/app/dashicons-building.png" width="100"></div>
              <div class="col-md-11">
                <div class="form-group"> <label>Jumlah Donasi*</label> <input type="text" class="form-control" placeholder="0 		Porsi"> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"><img class="img-fluid d-block my-3 mx-auto animate-in-left"  src="../assets/app/map-postal-code.png" width="100" style=""></div>
              <div class="col-md-11">
                <div class="form-group"> <label>Lokasi*</label> <br> <input id="autocomplete-input" type="text" 
                            class="autocomplete" autocomplete="off" spellcheck="false" dir="auto"
                            placeholder="Location" onFocus="geolocate()" class="form-control" placeholder="Pilih Lokasi Anda >" >

                <script>
                    var autocomplete;
                    function initAutocomplete(){
                        autocomplete = new google.maps.places.Autocomplete(
                        document.getElementById('autocomplete-input'), {types: ['geocode']});
                        autocomplete.addListener('place_changed', getAddressDetails);
                    }
                    function getAddressDetails(){
                        var place = autocomplete.getPlace();   
                        window.lat = place.geometry.location.lat();
                        window.long = place.geometry.location.lng();
                    }
                    function geolocate(){
                    if (navigator.geolocation){
                        navigator.geolocation.getCurrentPosition(function(position){
                        var geolocation = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                            var circle = new google.maps.Circle(
                            {center: geolocation, radius: position.coords.accuracy});
                            autocomplete.setBounds(circle.getBounds());
                        });
                        document.getElementById("geolocate").value = "lat: position.coords.latitude,lng: position.coords.longitude";
                    }
                    }
                    document.getElementById("geolocate").value = "lat: position.coords.latitude,lng: position.coords.longitude";
                    </script>
                   <!-- <div id="autocomplete-container">
                            <input id="autocomplete-input" type="text" 
                            class="autocomplete" autocomplete="off" spellcheck="false" dir="auto"
                            placeholder="Location" onFocus="geolocate()">
                        </div>-->
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"><img class="img-fluid d-block my-3 mx-auto animate-in-left"  src="../assets/app/Vector-2.png" width="100"></div>
              <div class="col-md-11">
                <div class="form-group"> <label>Batas Ketersediaan*</label> <input type="date" id="date" class="form-control" placeholder="Atur Batas Waktu >"> </div>
              </div>
              <div class="col-md-1"><img class="img-fluid d-block my-3 mx-auto animate-in-left" src="../assets/app/dashicons-editor-alignleft.png" width="100"></div>
              <div class="col-md-11">
                <div class="form-group"> <label>Deskripsi Donasi*</label> <input type="text" id="text" class="form-control" placeholder="EX: Ayam Madu "> </div>
              </div>
            </div> <br>
            <a type="button" id=donasi class="btn btn-primary btn-block" style="background: rgba(28, 75, 30, 0.33);" href="/donasi">UNGGAH DONASI</a>
          </div>
          </form>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" style=""></script>
      </center>
    </div>
  </div>
@include('partial.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

$("#donasi").click(function(e){
  console.log("hahahah")
  e.preventDefault()
  var judul = $("#judul").val()
  var text = $("#text").val()
  var date = $ ("#date").val()
  var autocomplete-input = $("autocomplete-input").val()

    console.log(email)
});
    
</script>

<script>
echo "<pre>";
print_r($_FILES);
echo "</pre>";
</script>