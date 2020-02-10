@include('partial.header')
<form action="/proses" method="post">
         {{ csrf_field() }}
<div class="col-md-6">
    </div>
    <div class="py-5" style="background: #D2EC36;">
      <div class="container">
        <div class="row py-5">
          <div class="col-md-5 order-2 order-md-1"> <img class="img-fluid d-block my-3 mx-auto animate-in-left" src="assets/app/login.png" width="600"> </div>
          <div class="col-md-7 align-self-center order-1 order-md-2 my-3 text-md-left text-center" style="background: rgba(253, 251, 251, 0.29); border-radius: 30px;">
            <div class="card-body">
              <center>
                <h5 class="card-title"><b>LOGIN</b></h5>
              </center>
              <form class="">
                <div class="form-group"> <label>Email address</label> <input type="email" name="email" class="form-control" placeholder="Enter email" style="background: rgba(231, 229, 229, 0.24)">
                </div>
                <div class="form-group"> <label>Password</label> <input type="password" name="password" class="form-control" placeholder="Password" style="background: rgba(231, 229, 229, 0.24)"> </div> 
                <a type="button" class="btn btn-primary btn-block" style="background: rgba(28, 75, 30, 0.33);" href="/">Submit</a><br>

                <center><a class="" style="font-size:10px" href='/forgetpass'>Forget Password</a></center> <br>
                <center><small class="form-text text-muted">Don’t have account ? </small> <a class="" style="font-size:10px" href='/singup'>Sing Up</a>
                </center>
              </form>
            </div><small class="form-text text-muted">
            </small>
          </div><small class="form-text text-muted">
          </small>
        </div><small class="form-text text-muted">
  @include('partial.footer')