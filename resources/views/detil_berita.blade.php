@extends("main")
@section('container')
<h1>halaman berita</h1>
<section id ="" class="p-5">
  <div class = 'container'>
    <div class = 'row' >
        <div class = ' col mb-8 mb-3'>
          <div class="card">
          {{-- <img src="/img/{{ $detil_berita->foto }}" class="card-img-top" alt="..."> --}}
          <img src="{{ asset('storage/' . $detil_berita->foto) }}">
          <div class="card-body">
            <h5 style="color:aqua(32,150,110)">{{ $detil_berita->judul_berita }}</a></h5>
            <p class="card-text"><small class="text-muted">kategori->{{ $detil_berita->kategori->nama }}</small></p>
            <p class="card-text">{{ $detil_berita->isi_berita }}</p>
              <a href="/berita/" class="btn btn-primary">kembali ke Berita</a></p>
            </div>
          </div>
        </div>
        <div class = ' col mb-4 mb-3'>
          <h5 class="text-center" style="color:brown">- kolom iklan-</h5>
          <div class="card mb-3">
            <div class="card">
              <img src="{{ asset('img/sma.jpg') }}" class="card-img-top" alt="...">
              <p class="text-info bg-muted">Seragam adalah seperangkat pakaian yang biasanya dikenakan secara bersamaan baik model, motif maupun jenis bahan yang sama, dan dikenakan oleh anggota suatu instansi atau organisasi dalam berpartisipasi pada instansi atau organisasi tersebut.</p>
            </div>
            <div class="card mb-3">
              <div class="card">
                <img src="{{ asset('img/seragam.jpg') }}" class="card-img-top" alt="...">
                <p class="text-info bg-muted">Pakaian Seragam Khas Sekolah adalah pakaian seragam bercirikan karakteristik Sekolah yang dikenakan oleh Peserta Didik pada hari tertentu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection