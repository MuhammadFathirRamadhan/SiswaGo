@extends('layouts.main')

@section('style')
<style>
  .card-wrapper{
    margin-bottom: 1.5rem;
  }
  .card{
    margin-top:20px;
    height: 100%;
  }
  .card .btn{
    border-radius:2px;
    text-transform:uppercase;
    font-size:12px;
    padding:7px 20px;
  }
  .card .card-img-block {
    width: 91%;
    margin: 0 auto;
    position: relative;
    top: -20px;
    transition: .3s all ease-in-out;
  }
  .card:hover .card-img-block{
    top: -30px;
  }
  .card .card-img-block img{
    border-radius:5px;
    box-shadow:0 0 10px rgba(0,0,0,0.43);
  }
  .card h5{
    font-weight:600;
    margin-top: -4px;
  }
  .card p{
    font-size:14px;
    font-weight:300;
  }
  .text-center {
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto;
    text-align: center;
    margin:auto;
  }
</style>
@endsection

@section('main-content')
<div class="container my-4">

  {{-- Bagian Form Pencarian --}}
  <div class="search col-lg-4 m-auto">
    <form action="{{ url('/students') }}" method="get">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari siswa..." name="searchKeyword" value="{{ request('searchKeyword') }}">
            <button style="background-color:yellow;">Cari</button>
        </div>
    </form>
  </div>

  {{-- Bagian Menampilkan Siswa --}}
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 mt-4">
    @if($students->isNotEmpty())
      @foreach ($students as $student)
        <a href="/students/{{ $student->id }}" class="card-wrapper col-md-4 mt-4 text-decoration-none">
          <div class="card">
            <div class="card-img-block">
              @if($student->photo)
                <img class="card-img-top" src="/storage/{{ $student->photo }}" alt="Card image cap">
              @else
                <img class="card-img-top" src="{{ asset('img/studentDefault.png') }}" alt="Card image cap">
              @endif
            </div>
            <div class="card-body pt-0">
              <h5 class="card-title">{{ $student->name }}</h5>
              <p class="card-text">Kelas: {{ $student->class }}</p>
            </div>
          </div>
        </a>
      @endforeach
    @else
      <div class="text-center">
        <p>Siswa tidak ditemukan.</p>
      </div>
    @endif
  </div>
</div>
@endsection
