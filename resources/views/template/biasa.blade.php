@include('partial.header')
  <!--jadi tadi tug gambarnya kegedean 25%, gw kecilin aja jdi 5%
	caranya sama, klik kotak putih trs liat apa yg salah
-->
  <!--<img src="assets/app/logo_beebagi.png" class=" center-block img-fluid d-block shadowed" width="5%">-->
  <div style="background: rgb(210, 236, 54);" class="row" >
    <div class="container py-5"><br><br>
      <div class="rowpy-5" style="">
      </div>
      <center class="">
        <div class="py-2" style="background: rgba(253, 251, 251, 0.29); border-radius: 30px;">
          <div class="col-md-9 order-2 order-md-1">
            <div class="btn-group" font-size:="50px" style="height : 50px; width: 600px"> <a href="#" class="btn btn-outline-primary">PENDANAAN</a> <a href="/donasi" class="btn btn-primary">DONASI</a> </div>
            <div class="row">
              <div class="col-md-4" style=""><img class="img-fluid d-block my-3 mx-auto animate-in-left" src="../assets/app/Untitled-1 1.png" width="50">
                <h5 class="" ><a class="" href="/form"  style="color:#006400;">Galang Dana</a></h5>
              </div>
              <div class="col-md-4"><img class="img-fluid d-block my-3 mx-auto animate-in-left" src="../assets/app/Untitled-2 1.png" width="100">
                <h5 class=""><a class="" href="/laporan"  style="color:#006400;">Donasi Saya</b></h5>
              </div>
              <div class="col-md-4"><img class="img-fluid d-block my-3 mx-auto animate-in-left" src="../assets/app/ic-outline-assignment.png" width="60">
                <h5 class=""><a class="" href="#"  style="color:#006400;">Penggalangan</b></h5>
              </div>
            </div>
          </div>
        </div>
      </center>
    </div>
    <div class="row">
      <div class="col-md-12">
      </div>
    </div>
  </div>
  @include('partial.footer')
   <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-firestore.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
console.log("tessssssssssssssssss")
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyC45-u8Is3MUyasMj9qeJJYc_W1SYL4co4",
    authDomain: "beebagi-fedcc.firebaseapp.com",
    databaseURL: "https://beebagi-fedcc.firebaseio.com",
    projectId: "beebagi-fedcc",
    storageBucket: "beebagi-fedcc.appspot.com",
    messagingSenderId: "473815225103",
    appId: "1:473815225103:web:11fd8b71235d4b8e57a47a"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  var db = firebase.firestore();

  db.collection("Charity").get().then((querySnapshot) => {
    querySnapshot.forEach((doc) => {
        console.log(doc);
    });
});


</script>
  