@extends("main")
@section('container')
<style type="text/css">
  body{
      background-image: url("img/kunci.png");
  }

</style>
    <h1>halaman home</h1>  
    <center><img src="img/per.jpg" alt= "anime" width="300px"  class="img-thumbnail"></center>
    <center><h1 >Hello, Selamat Datang </h1></center>
    <center><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, voluptate architecto. 
        Fugiat blanditiis dolore maiores, delectus vel perspiciatis dolorum temporibus!</center>
    <div class="row">
      <div class="card text-bg-warning mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/kucing.jfif" style="width:100%" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">kucing</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in</p>
                <button type="button" class="btn btn-info">Info</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card text-bg-danger mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/tikus.JPG" style="width:100%" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">tikus</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in</h5>
                  <button type="button" class="btn btn-info">Info</button>
                </div>
              </div>
            </div>
          </div>

            <div class="card text-bg-secondary mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/anjim.jfif" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">anjing</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in</h5>
                      <button type="button" class="btn btn-info">Info</button>
                    </div>
                  </div>
                </div>
              </div>

    <div class="card text-bg-primary mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="img/pm.jpg"  style="width:100%" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">wibu</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in</h5>
            <button type="button" class="btn btn-info">Info</button>
          </div>
        </div>
      </div>
    </div>
@endsection
