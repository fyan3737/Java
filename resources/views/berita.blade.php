@extends("main")
@section('container')
<style type="text/css">
  body{
      background-color:deepskyblue;
      background-image: url("img/sakura.jpg");
      background-repeat: repeat-x;
  }
</style>
  <h1>halaman berita</h1>
<section id ="" class="p-5">
  <div class = 'container'>
    <div class = 'row' >
      @foreach($berita as $detil_berita)
      <div class = ' col mb-8 mb-3'>
          <div class="card" >
            {{-- <img src="/img/{{ $detil_berita->foto }}" class="card-img-top" alt="..."> --}}
            <img src="{{ asset('storage/' . $detil_berita->foto) }}">
          <div class="card-body">
            <h5 class= "card-title"><a href="/berita/{{ $detil_berita->slug }}" style="color:aqua(32,150,110)">
              {{ $detil_berita->judul_berita }}</a></h5>
            <p class="card-text">{{ $detil_berita->judul_berita }}</p>
            <div class="text-end">
              <a href="/berita/{{ $detil_berita->slug }}" class="btn btn-primary">Detil berita</a>
          </div>
        </div>
        </div>
      </div>
      @endforeach
      <div class="w3-card-4 w3-margin w3-white">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="/img/hecker.jfif" class="card-img-top" alt="..." style="width:70%">
          </div>
          <div class="col-md-4">
              <div class="w3-container">
              <h3><b>TITLE HEADING</b></h3>
              <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
        </div>
      </div>
      <div class="col-md-8>
        <div class="w3-container">
        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <div class="w3-row">
        <div class="w3-col m8 s12">
        <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
        <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
        </div>
      </div>
      </div>
        </div>
        </div>
        </div>
        <hr>
    </div>
  </div>
</section>
@endsection